param (
    [string]$sourceFolder,
    [string]$outputFilePath,
    [string]$outputFileName
)

# Function to replace Microsoft quotes with standard quotes
function Replace-MicrosoftQuotes {
    param ([string]$content)
    $content = $content -replace "[\u201C\u201D]", '"'
    $content = $content -replace "[\u2018\u2019]", "'"
    return $content
}

# Validate parameters
if (-not (Test-Path $sourceFolder)) {
    Write-Host "Source folder does not exist: $sourceFolder" -ForegroundColor Red
    exit 1
}

# Create logs folder if it doesn't exist
$logFolderPath = Join-Path -Path $outputFilePath -ChildPath "logs"
if (-not (Test-Path $logFolderPath)) {
    New-Item -Path $logFolderPath -ItemType Directory
}

# Generate log file name
$timestamp = Get-Date -Format "yyyy-MM-dd__HH-mm"
$logFileName = "${timestamp}.log"
$logFilePath = Join-Path -Path $logFolderPath -ChildPath $logFileName

# Set output file path
$outputFile = Join-Path -Path $outputFilePath -ChildPath $outputFileName
$tempFile = Join-Path -Path $outputFilePath -ChildPath "temp.md"

# Remove existing output file if it exists
if (Test-Path $outputFile) {
    Write-Host "Removing existing output file: $outputFile" -ForegroundColor Yellow
    Remove-Item $outputFile
}

Write-Host "Starting to process files in folder: $sourceFolder" -ForegroundColor Green

# Create log file and write headers
"Filename`tFirst Line`tMatch Status" | Out-File -FilePath $logFilePath

# Process each .docx file in the source folder
Get-ChildItem -Path $sourceFolder -Filter "*.docx" | ForEach-Object {
    $fileName = $_.Name
    $fileTitle = [System.IO.Path]::GetFileNameWithoutExtension($_.Name)
    $header = "############################################################"
    $date = Get-Date -Format "yyyy-MM-dd"

    Write-Host "Processing file: $fileName" -ForegroundColor Cyan

    # Read the first line and assign it to $firstLine
    $firstLine = pandoc $_.FullName -t plain | Select-Object -First 1

    # Remove the first line from the formatted content
    $formattedContent = (pandoc $_.FullName -t plain) -split '\n', 2 | Select-Object -Last 1


    if ($firstLine.ToLower().Trim() -eq $fileTitle.ToLower()) {
        $matchStatus = "MATCHES"
        $logEntry = "$fileName`t`t$matchStatus"
    }
    else {
        $matchStatus = "DOESN'T MATCH"
        $logEntry = "$fileName`t$firstLine`t$matchStatus"
    }

    # Log the result
    $logEntry | Out-File -FilePath $logFilePath -Append

    # Read full file content and replace double new lines with single
    $fileContent = pandoc $_.FullName -t plain
    $formattedContent = $fileContent -replace "\n\n", "\n"

    # Replace Microsoft quotes with standard quotes
    $formattedContent = Replace-MicrosoftQuotes -content $formattedContent

    # Append header, first line, date, and content to temp file using heredoc
    @"
$header
$firstLine
[[DATE]]
$formattedContent
"@ | Out-File -FilePath $tempFile -Append
}

# Convert the markdown file to a single docx file
Write-Host "Generating combined document: $outputFile" -ForegroundColor Green
pandoc $tempFile -o $outputFile

# Clean up temp file
Remove-Item $tempFile

Write-Host "Completed. Combined document created at: $outputFile" -ForegroundColor Green
Write-Host "Log file created at: $logFilePath" -ForegroundColor Green

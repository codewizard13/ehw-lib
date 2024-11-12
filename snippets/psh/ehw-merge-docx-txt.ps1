param (
    [string]$sourceFolder,
    [string]$outputFilePath,
    [string]$outputFileName
)

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

  # Read the entire content of the file (only once)
  $fileContent = pandoc $_.FullName -t plain

  # Split the content by new lines
  $lines = $fileContent -split "`n"

  # Assign the first line to $firstLine and remove it from $lines
  $firstLine = $lines[0]
  $formattedContent = $lines[1..($lines.Length - 1)] -join "`n"

  # Debugging (comment out or remove in production)
#   Write-Host "`$firstLine: $firstLine" -ForegroundColor Magenta
#   Write-Host "`$formattedContent: $formattedContent" -ForegroundColor Magenta

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

  # Replace double new lines with single
  $formattedContent = $formattedContent -replace "\n\n", "\n"

  # Replace Microsoft quotes with standard quotes
  $formattedContent = Replace-MicrosoftQuotes -content $formattedContent

  # Append header, first line, date, and content to temp file using heredoc
  @"
$header
$firstLine
[DATE]
$formattedContent.Trim()
"@ | Out-File -FilePath $tempFile -Append


}

# Convert the markdown file to a single docx file
Write-Host "Generating combined document: $outputFile" -ForegroundColor Green
pandoc $tempFile -o $outputFile

# Clean up temp file
# Remove-Item $tempFile

Write-Host "Completed. Combined document created at: $outputFile" -ForegroundColor Green
Write-Host "Log file created at: $logFilePath" -ForegroundColor Green

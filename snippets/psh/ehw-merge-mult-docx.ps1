param (
  [string]$sourceFolder = ".",
  [string]$outputFileDir = ".",
  [string]$outputFileName = "merged_doc.docx"
)

# Define results folder and output file path
$resultsFolder = Join-Path -Path (Resolve-Path -Path $outputFileDir) -ChildPath "results"
$outputFileFQP = Join-Path -Path $resultsFolder -ChildPath $outputFileName

Write-Host "`$outputFileFQP: $outputFileFQP`r" -ForegroundColor Magenta

# Create results folder if it doesn't exist
if (-not (Test-Path $resultsFolder)) {
  Write-Host "NOT FOUND: `$resultsFolder. Creating folder path ...`r" -ForegroundColor Blue
  New-Item -Path $resultsFolder -ItemType Directory
}
else {
  Write-Host "FOUND: `$resultsFolder exists`r" -ForegroundColor Magenta
}

# Check if Pandoc is installed
if (!(Get-Command "pandoc" -ErrorAction SilentlyContinue)) {
  Write-Host "Pandoc is not installed. Please install Pandoc first." -ForegroundColor Red
  exit
}
else {
  Write-Host "Found Pandoc ..." -ForegroundColor Magenta
}

# Get all .docx files in the source folder
$docxFiles = Get-ChildItem -Path (Resolve-Path -Path $sourceFolder) -Filter "*.docx" | Sort-Object Name
$fileCount = $docxFiles.Count
if ($fileCount -eq 0) {
  Write-Host "No .docx files found in the specified folder." -ForegroundColor Yellow
  exit
}
else {
  Write-Host "Found $fileCount .docx files" -ForegroundColor Magenta
}

# Create a temporary directory for modified .docx files
$tempFolder = New-Item -ItemType Directory -Path (Join-Path -Path $resultsFolder -ChildPath "temp_files") -Force

# Function to format date based on filename pattern
function Get-DateFromFilename {
  param ($filename)
  if ($filename -match "^_(\d{1,2})-(\d{1,2})__") {
    $month = [int]$matches[1]
    $day = [int]$matches[2]
    $dateString = "{0:D2}-{1:D2}" -f $month, $day
    $date = [datetime]::ParseExact($dateString, "MM-dd", $null)
    return $date.ToString("MMMM dd")
  }
  return ""
}

# Process each file, converting to text and adding date/headers
$modifiedDocxFiles = @()
foreach ($file in $docxFiles) {
  # Extract and format the date from the filename
  $formattedDate = Get-DateFromFilename -filename $file.Name
  Write-Host "Processing file: $($file.Name) with date: $formattedDate" -ForegroundColor Cyan

  # Convert .docx to .txt
  $tempTxtPath = Join-Path -Path $tempFolder.FullName -ChildPath "$($file.BaseName).txt"
  pandoc $file.FullName -o $tempTxtPath

  # Read, modify, and save the text content
    
    
  $fileContent = Get-Content -Path $tempTxtPath

  # First line of the original content
  $firstLine = $fileContent[0]

  # Remaining content of the file
  $remainingContent = $fileContent[1..($fileContent.Length - 1)] -join "`r`n"        

  $header = "=================================`r`n"
  $dateLine = if ($formattedDate) { "$formattedDate`r`n" } else { "" }
  # $modifiedContent = "$header`r`n$firstLine`r`n$dateLine`r`n" + ($fileContent -join "`r`n")
  $modifiedContent = "$header`r`n$firstLine`r`n`r`n$dateLine`r`n" + $remainingContent

  Set-Content -Path $tempTxtPath -Value $modifiedContent

  # Convert modified .txt back to .docx
  $tempDocxPath = Join-Path -Path $tempFolder.FullName -ChildPath $file.Name
  pandoc $tempTxtPath -o $tempDocxPath
  $modifiedDocxFiles += $tempDocxPath
}

# Join paths of modified files for Pandoc, ensuring each is quoted
$docxFilePaths = ($modifiedDocxFiles | ForEach-Object { "`"$_`"" }) -join " "

# Run Pandoc to merge files
$command = "pandoc $docxFilePaths -o `"$outputFileFQP`""
Invoke-Expression $command

# Cleanup temporary files
Remove-Item -Path $tempFolder -Recurse -Force

# Completion message
Write-Host "`nMerge complete! Output saved to $outputFileFQP" -ForegroundColor Magenta

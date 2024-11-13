param (
    [string]$sourceFolder,
    [string]$outputFileDir,
    [string]$outputFileName = "merged_doc.docx"
)

# Parameters
$sourceFolder =   # Change this to the path of your folder with .docx files
$resultsFolder = "$outputFileDir"
$outputFilePath = "$resultsFolder/$outputFilename"  # Output file name

# Create results folder if it doesn't exist
$resultFolderPath = Join-Path -Path $outputFilePath -ChildPath "results"
if (-not (Test-Path $resultFolderPath)) {
    New-Item -Path $resultFolderPath -ItemType Directory
}

# Check if Pandoc is installed
if (!(Get-Command "pandoc" -ErrorAction SilentlyContinue)) {
    Write-Host "Pandoc is not installed. Please install Pandoc first." -ForegroundColor Red
    exit
} else {
  Write-Host "Found Pandoc ..." -ForegroundColor Magenta
}

# Get all .docx files in the folder
$docxFiles = Get-ChildItem -Path $sourceFolder -Filter "*.docx" | Sort-Object Name
$fileCount = $docxFiles.Count

if ($fileCount -eq 0) {
    Write-Host "No .docx files found in the specified folder." -ForegroundColor Yellow
    exit
} else {
  Write-Host "Found $fileCount .docx files" -ForegroundColor Magenta
}

# Initialize progress variables
$progressBarWidth = 50
$currentFile = 0

# Create a temporary text file to list all .docx files for Pandoc
$tempListFile = "$resultsFolder\docx_file_list.txt"
$docxFiles | ForEach-Object { $_.FullName } | Out-File -FilePath $tempListFile -Encoding UTF8

# Progress bar function
function Show-Progress {
    param (
        [int]$progress,
        [int]$total,
        [int]$width
    )
    $percentage = [math]::Floor(($progress / $total) * 100)
    $filled = [math]::Floor(($progress / $total) * $width)
    $bar = "[$("█" * $filled)$(" " * ($width - $filled))] $percentage%"

    Write-Host -NoNewline "`r$bar"
}

# Merge files with Pandoc
Write-Host "Merging .docx files..."
foreach ($file in $docxFiles) {
    $currentFile++
    Show-Progress -progress $currentFile -total $fileCount -width $progressBarWidth
}

# Run Pandoc to merge files
pandoc @$tempListFile -o $outputFilePath

# Cleanup temporary file
# Remove-Item $tempListFile -Force

# Completion message
Write-Host "`nMerge complete! Output saved to $outputFilePath" -ForegroundColor Magenta

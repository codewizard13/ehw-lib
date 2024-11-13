param (
    [string]$sourceFolder = ".",
    [string]$outputFileDir = ".",
    [string]$outputFileName = "merged_doc.docx"
)

# Define results folder and output file path
$resultsFolder = Resolve-Path -Path $outputFileDir  # Convert relative path to full path
$outputFileFQP = Join-Path -Path $resultsFolder -ChildPath $outputFileName  # Construct full path to output file

Write-Host "`$outputFileFQP: $outputFileFQP`r" -ForegroundColor Magenta

# Create results folder if it doesn't exist
if (-not (Test-Path $resultsFolder)) {
    Write-Host "NOT FOUND: `$resultsFolder. Creating folder path ...`r" -ForegroundColor Blue
    New-Item -Path $resultsFolder -ItemType Directory
} else {
    Write-Host "FOUND: `$resultsFolder exists`r" -ForegroundColor Magenta
}

# Check if Pandoc is installed
if (!(Get-Command "pandoc" -ErrorAction SilentlyContinue)) {
    Write-Host "Pandoc is not installed. Please install Pandoc first." -ForegroundColor Red
    exit
} else {
    Write-Host "Found Pandoc ..." -ForegroundColor Magenta
}

# Get all .docx files with full paths in the source folder
$docxFiles = Get-ChildItem -Path (Resolve-Path -Path $sourceFolder) -Filter "*.docx" | Sort-Object Name

$fileCount = $docxFiles.Count
if ($fileCount -eq 0) {
    Write-Host "No .docx files found in the specified folder." -ForegroundColor Yellow
    exit
} else {
    Write-Host "Found $fileCount .docx files" -ForegroundColor Magenta
}

# Display only the filenames to the screen
foreach ($file in $docxFiles) {
    Write-Host "Processing file: $($file.Name)" -ForegroundColor Cyan
}

# Create a list of file paths as a single string, each file path properly quoted
$docxFilePaths = ($docxFiles | ForEach-Object { "`"$_`"" }) -join " "

# Build the Pandoc command string, enclosing the output path in quotes
$command = "pandoc $docxFilePaths -o `"$outputFileFQP`""

# Execute the command
Invoke-Expression $command

# Completion message
Write-Host "`nMerge complete! Output saved to $outputFileFQP" -ForegroundColor Magenta

# Parameters
$folderPath = "C:\path\to\your\folder"  # Change this to the path of your folder with .docx files
$outputFile = "$folderPath\merged_document.docx"  # Output file name

# Check if Pandoc is installed
if (!(Get-Command "pandoc" -ErrorAction SilentlyContinue)) {
    Write-Host "Pandoc is not installed. Please install Pandoc first." -ForegroundColor Red
    exit
}

# Get all .docx files in the folder
$docxFiles = Get-ChildItem -Path $folderPath -Filter "*.docx" | Sort-Object Name
$fileCount = $docxFiles.Count

if ($fileCount -eq 0) {
    Write-Host "No .docx files found in the specified folder." -ForegroundColor Yellow
    exit
}

# Initialize progress variables
$progressBarWidth = 50
$currentFile = 0

# Create a temporary text file to list all .docx files for Pandoc
$tempListFile = "$folderPath\docx_file_list.txt"
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
pandoc @$tempListFile -o $outputFile

# Cleanup temporary file
Remove-Item $tempListFile -Force

# Completion message
Write-Host "`nMerge complete! Output saved to $outputFile"

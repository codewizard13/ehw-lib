<#
Type:         	PowerShell Code Snippet
Sub-Type:     	N/A
TITLE:        	Create Multiple Folders
Author:       	Eric Hepperle
Date Created: 	2024-03-10
Date Modified:  --
Version:        00.01.00

DESCRIPTION:

- Creates folders from an array of folder names for setting up tax returns.


FUTURE:

- Modify to make more universal 

USAGE:

- Execute the file in the folder you want the subfolders created.

SAMPLE RESULTS:

Folder not exist: .\_Orders
d-----         3/10/2024  10:32 AM                _Orders
New folder D:\_TaxReturns\DestDir\_Orders created
Folder not exist: .\_Receipts
d-----         3/10/2024  10:32 AM                _Receipts
New folder D:\_TaxReturns\DestDir\_Receipts created

REQUIRES:
- PowerShell
- VSCode or similar IDE to execute console script

TAGS:

PowerShell, Functions, Folders, Loops

REFERENCES:
- N/A


#>




function Function-Setup {

    function Create-Dir-If-Not-Exist {
        param($FolderPath = "C:\Temp")
     
        #Check if Folder exists
        If (!(Test-Path -Path $FolderPath)) {
            #powershell create directory
            New-Item -ItemType Directory -Path $FolderPath
            Write-Host "New folder created successfully!" -f Green
        }
        Else {
            Write-Host "Folder already exists!" -f Yellow
        }
    
    
        #Read more: https://www.sharepointdiary.com/2021/07/create-a-folder-using-powershell.html#ixzz8U5A0no9r
    }

    function Create-Multiple-Dirs {
        param($Dirs, $DestRoot = $(Get-Location))
        # $Dirs = List of directory names to create
        # $DestRoot = The folder to create the new directories in. Defaults to current dir.
    
        $CurrentDir = pwd
        Write-Host "pwd:`t$CurrentDir`n`n" -f Cyan
        $CurrentDir = $(Get-Location)
        Write-Host "`$(Get-Location):`t$CurrentDir`n`n" -f Cyan
    
        # If no directory list provided, throw error and exit script
        if ( $Dirs.Count -eq 0) { 
            Write-Host "Error: The list of subdirectories to create cannot be empty! Please try again.`n" -f Red
            Exit
        }
    
        
        # If $DestRoot doesn't exist throw error and exit script
        if (! (Test-Path -Path $DestRoot)) {
            Write-Host "Error: The folder `"$DestRoot`" does not exist! Please try the `"Create-Multiple-Dirs`" command again, but use a folder path that exists." -f Red
            exit;
        }
        else {
            Write-Host "Yay!" -f Green
        }
    
    
        ForEach ($Dir in $Dirs) {
    
            $DirPath = "$DestRoot\$Dir"
    
            # Check if Folder exists
            if ( ! (Test-Path -Path $DirPath) ) {
            
                Write-Host "Folder not exist: $DirPath" -f DarkCyan
    
                # Powershell create directory
                New-Item -ItemType Directory -Path $DirPath
                Write-Host "New folder $DirPath created`n" -f Green
                Set-Folder-Icon( $DirPath )
            
            }
            else {
                Write-Host "Folder $DirPath already exists!`n" -f Red
            }
    
    
            # Write-Host "Dir Name: $Dir" -f Green
    
        }
    
    
    }


    function Set-Folder-Icon {
        # $TargetDir = Path - location of folder to create the desktop.ini file in
        param( $TargetDir = $(Get-Location))
    
        $DesktopIni = @"
    [.ShellClassInfo]
    IconResource=C:\WINDOWS\System32\SHELL32.dll,316
"@
    
        $desktopIniPath = "$($TargetDir)\desktop.ini"
    
        If (Test-Path $desktopIniPath) {
            Write-Warning "The desktop.ini file already exists."
        }
        else {
            Write-Host "Creating desktop.ini in $TargetDir`n" -f DarkCyan
            #Create/Add content to the desktop.ini file
            Add-Content $desktopIniPath -Value $DesktopIni
    
            #Set the attributes for $DesktopIni
            (Get-Item $desktopIniPath -Force).Attributes = 'Hidden, System, Archive'
    
            #Finally, set the folder's attributes
            (Get-Item $TargetDir -Force).Attributes = 'ReadOnly, Directory'
    
        }
        
    }

    # echo "Exting Function-Setup" -f yellow

}
. Function-Setup




# Define the folders to be created
$dirNames = @('_AutoReg', '_BankTrans', '_Giving', '_HealthSavAcct', '_JobExpenses', '_JobHuntExp', '_Orders', '_Receipts', '_PropertyTaxes', '_Retirement', '_PrevReturns', '_W2', '_DefTerms')


# foreach ($dirName in $dirNames) {
#     Write-Output $dirName
# }

## Get the content from the file list.
# foreach ($file in Get-Content -Path "$drive\Testing\DEV33.txt") {
#     $name = (Split-Path -Path $file -Parent) -replace '\\', '_' -replace ':'
#     New-Item -Path "path\to\$name" -ItemType Directory
# }




# Create-Dir-If-Not-Exist



# Create-Multiple-Dirs $dirNames "Atlantis"
# Create-Multiple-Dirs $dirNames ("D:\_TaxReturns" + "\texas")
Create-Multiple-Dirs $dirNames "testing"

Write-Host "Continuing ... " -f Green



# FUNCTION: Set-Folder-Icon
<#

#>


# Set-Folder-Icon

# Create-Dir-If-Not-Exist "D:\_TaxReturns\testing\blue"
<#
Type:         	PowerShell Code Snippet
Sub-Type:     	N/A
TITLE:        	Create Multiple Folders
Author:       	Eric Hepperle
Date Created: 	2024-03-10
Date Modified:  2024-03-17
Version:        00.01.01

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
- https://www.reddit.com/r/PowerShell/comments/f6zlbp/path_vs_literalpath/
- https://lazywinadmin.com/2013/10/powershell-get-substring-out-of-string.html


#GOTCHA: Use -LiteralPath instead of -Path when there are "[]" square brackets in the path name

#NOTE: Upgraded from PowerShell version 5.1 to 7 on Windows 10 with:

winget search Microsoft.PowerShell

# Result
Name               Id                           Version Source
---------------------------------------------------------------
PowerShell         Microsoft.PowerShell         7.3.4.0 winget
PowerShell Preview Microsoft.PowerShell.Preview 7.4.0.3 winget

winget install --id Microsoft.Powershell --source winget

Check version with: $PSVersionTable


#>




function Function-Setup {

    function Create-Dir-If-Not-Exist {
        param($FolderPath = "C:\Temp")
     
        #Check if Folder exists
        If (!(Test-Path -LiteralPath $FolderPath)) {
            #powershell create directory
            New-Item -ItemType Directory -LiteralPath $FolderPath
            Write-Host "New folder created successfully!" -f Green
        }
        Else {
            Write-Host "Folder already exists!" -f Yellow
        }
    
    
        #Read more: https://www.sharepointdiary.com/2021/07/create-a-folder-using-powershell.html#ixzz8U5A0no9r
    }

    function Create-Multiple-Dirs {
        param($Dirs, $DestRoot)
        # $Dirs = List of directory names to create
        # $DestRoot = The folder to create the new directories in. Defaults to current dir.

        # If $DestRoot is NOT empty AND $DestRoot is not ".\"
        $thisPwd = $(Get-Location)

        Write-Host "`$thisPwd = $thisPwd`n" -f Cyan

        # HANDLE INPUT for $DestRoot
        if ( $DestRoot -eq ".\" ) {
            $destRootOut = "DOT BACKSLASH"
            $DestRoot = "$(Get-Location)\$DestRoot"
        }
        elseif ( $DestRoot -eq "" ) {
            $destRootOut = "EMPTY STRING"
            $DestRoot = "$(Get-Location)\$DestRoot"
        }
        elseif ( $DestRoot -eq $NULL) {
            $destRootOut = "NULL"
            Write-Host "NULL: $(Get-Location)\$DestRoot"
            $DestRoot = "$(Get-Location)\$DestRoot"
            # IF $DestRoot is just one word, not a path
        }
        elseif ( $DestRoot -match "^[\w_\-]+$" ) {
            Write-Host "A SINGLE WORD: $DestRoot`n"
            $DestRoot = "$(Get-Location)\$DestRoot"
            $destRootOut = "`$DestRoot = $DestRoot"
            # IF $DestRoot is fully qualified path
        }
        elseif ( $DestRoot -like "*:*" ) {
            Write-Output "A COLON : was found at position $($DestRoot.IndexOf(':')) in"
            $destRootOut = "`$DestRoot = $DestRoot"
        } else {
            Write-Error "There was an illegal character in your entry. Only numbers, letters, underscore, hyphen, colon, backslash, and forward slash are allowed. Please try again."
            # Write-Host "IndexOf: " $DestRoot.IndexOf("")
            exit;
        }

        Write-Host "ABOUT to write dest root ..."
        Write-Host "$destRootOut`n" -f DarkYellow
    
        # If no directory list provided, throw error and exit script
        if ( $Dirs.Count -eq 0) { 
            Write-Host "Error: The list of subdirectories to create cannot be empty! Please try again.`n" -f Red
            Exit
        }
    
        
        # If $DestRoot doesn't exist throw error and exit script
        if (! (Test-Path -LiteralPath $DestRoot)) {
            Write-Host "Error: The folder `"$DestRoot`" does not exist! Please try the `"Create-Multiple-Dirs`" command again, but use a folder path that exists." -f Red
            exit;
        }
        else {
            Write-Host "Yay!" -f Green
        }
    
    
        ForEach ($Dir in $Dirs) {
    
            $DirPath = "$DestRoot\$Dir"
    
            # Check if Folder exists
            if ( ! (Test-Path -LiteralPath $DirPath) ) {
            
                Write-Host "Folder not exist: $DirPath" -f DarkCyan
    
                # Powershell create directory
                New-Item -ItemType Directory -Path $DirPath
                Write-Host "New folder $DirPath created`n" -f Green
                $IconPath = "..\turbotax_redcheck.ico,0"
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
        param( $TargetDir = $(Get-Location), $IconResource = "C:\WINDOWS\System32\SHELL32.dll,316" )
        Write-Debug "Inside Set-Folder-Icon ..."
    
        $DesktopIni = @"
    [.ShellClassInfo]
    IconResource=$IconResource
"@
    
        $desktopIniPath = "$($TargetDir)\desktop.ini"
    
        If (Test-Path $desktopIniPath) {
            Write-Warning "The desktop.ini file already exists."
        }
        else {
            Write-Host "Creating desktop.ini in $TargetDir`n" -f DarkCyan
            #Create/Add content to the desktop.ini file
            Add-Content -LiteralPath $desktopIniPath -Value $DesktopIni
    
            #Set the attributes for $DesktopIni
            (Get-Item -LiteralPath $desktopIniPath -Force).Attributes = 'Hidden, System, Archive'
    
            #Finally, set the folder's attributes
            (Get-Item -LiteralPath $TargetDir -Force).Attributes = 'ReadOnly, Directory'
    
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
# foreach ($file in Get-Content -LiteralPath "$drive\Testing\DEV33.txt") {
#     $name = (Split-Path -LiteralPath $file -Parent) -replace '\\', '_' -replace ':'
#     New-Item -LiteralPath "path\to\$name" -ItemType Directory
# }




# Create-Dir-If-Not-Exist



# Create-Multiple-Dirs $dirNames "Atlantis"
# Create-Multiple-Dirs $dirNames ("D:\_TaxReturns" + "\texas")
# Create-Multiple-Dirs $dirNames "info"
# Create-Multiple-Dirs $dirNames "info@"
# Create-Multiple-Dirs $dirNames "in+fo"
# Create-Multiple-Dirs $dirNames ".\"
# Create-Multiple-Dirs $dirNames 
Create-Multiple-Dirs $dirNames "D:\_TaxReturns\_TMPL__TAXRETURN_YYYYMMDD__Y[TAX_YEAR]\info"

Write-Host "Continuing ... " -f Green



# FUNCTION: Set-Folder-Icon
<#

#>


# Set-Folder-Icon

# Create-Dir-If-Not-Exist "D:\_TaxReturns\testing\blue"
$dirNames = @('_AutoReg', '_BankTrans', '_Giving', '_HealthSavAcct', '_JobExpenses', '_JobHuntExp', '_Orders', '_Receipts', '_PropertyTaxes', '_Retirement', '_PrevReturns', '_W2', '_DefTerms')


# foreach ($dirName in $dirNames) {
#     Write-Output $dirName
# }

## Get the content from the file list.
# foreach ($file in Get-Content -Path "$drive\Testing\DEV33.txt") {
#     $name = (Split-Path -Path $file -Parent) -replace '\\', '_' -replace ':'
#     New-Item -Path "path\to\$name" -ItemType Directory
# }


function Create-Dir-If-Not-Exist {
    #Variable
    $FolderPath = "C:\Temp"
 
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

# Create-Dir-If-Not-Exist

function Create-Multiple-Dirs {
    param($Dirs, $DestRoot=".")
    # $Dirs = List of directory names to create
    # $DestRoot = The folder to create the new directories in

    $CurrentDir = pwd

    # If $DestRoot doesn't exist throw error and exit script
    if (! (Test-Path -Path $DestRoot)) {
        Write-Host "Error: The folder `"$CurrentDir\$DestRoot`" does not exist. Please try the `"Create-Multiple-Dirs`" command again, but use a folder path that exists." -f Red
        exit;
    } else {
        Write-Host "Yay!" -f Green
    }


    ForEach ($Dir in $Dirs) {

        $DirPath = "$DestRoot\$Dir"

        # Check if Folder exists
        if ( ! (Test-Path -Path $DirPath) ) {
        
            Write-Host "Folder not exist: $DirPath" -f DarkCyan

            # Powershell create directory
            New-Item -ItemType Directory -Path $DirPath
            Write-Host "New folder $CurrentDir\$DirPath created" -f Green
        
        } else {
            Write-Host "Folder $CurrentDir\$DirPath already exists!" -f Red
        }


        # Write-Host "Dir Name: $Dir" -f Green

    }


}

# Create-Multiple-Dirs $dirNames "Atlantis"
Create-Multiple-Dirs $dirNames

Write-Host "Continuing ... " -f Green
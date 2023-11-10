$startNum = 1;
$endNum = 30;

for ($i = $startNum; $i -le $endNum; $i++) {
  $num =  [string]$i
  $num =  $num.PadLeft(2, "0")

  ## UNCOMMENT this line to actually create directories
  # new-item "Unit $num" -ItemType Directory 
  Write-Output "Unit $num" 
}
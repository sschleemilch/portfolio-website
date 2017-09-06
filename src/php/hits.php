<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$dateStr = date("y_n_d_");
$countfileName = $root . "/" . $dateStr . "hitsCount.log";
if(!file_exists($countfileName)){
    file_put_contents($countfileName, "0", FILE_APPEND);
}
$countFile = fopen($countfileName, "r");
$counter = fgets($countFile,100);
fclose($countFile);
$counter=$counter + 1;
echo "$counter";
$countFile = fopen($countfileName,"w");
fwrite($countFile, $counter);
fclose($countFile);
?>
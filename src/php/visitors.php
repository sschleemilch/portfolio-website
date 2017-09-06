<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$dateStr = date("y_n_d_");
$visitorsFileName = $root . "/" . $dateStr . "visitorsCount.log";

$fileWasEmpy = false;
if(!file_exists($visitorsFileName)){
    $fileWasEmpy = true;
    file_put_contents($visitorsFileName, "", FILE_APPEND);
}
$visitorCounter = 0;
$visitorIP = trim($_SERVER['REMOTE_ADDR']);
$visitorNew = true;
if ($file = fopen($visitorsFileName, "r")) {
    while(!feof($file)) {
        $line = fgets($file);
        $ip = trim($line);
        if (strcmp($ip, $visitorIP) == 0){
            $visitorNew = false;
        }
        $visitorCounter = $visitorCounter + 1;
    }
    fclose($file);
}

if ($visitorNew){
    if($fileWasEmpy){
        file_put_contents($visitorsFileName, $visitorIP, FILE_APPEND);
    }else{
        file_put_contents($visitorsFileName, "\n" . $visitorIP, FILE_APPEND);
    }
    $visitorCounter = $visitorCounter + 1;
}
echo $visitorCounter;
?>
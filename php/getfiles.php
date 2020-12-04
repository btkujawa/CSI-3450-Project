<?php
$basedir = "/home/mine/school/csi-3450/project/CSI-3450-Project/";
$gameImagePath = $basedir.'images/games/';
$gcImagePath = $gameImagePath.'gc/';
$ps1ImagePath = $gameImagePath.'ps1/';
$xbox360ImagePath = $gameImagePath.'xbox360/';
$pcImagePath = $gameImagePath.'pc/';

$relativegameImagePath = '/images/games/';
$relativegcImagePath = $relativegameImagePath.'gc/';
$relativeps1ImagePath = $relativegameImagePath.'ps1/';
$relativexbox360ImagePath = $relativegameImagePath.'xbox360/';
$relativepcImagePath = $relativegameImagePath.'pc/';

$gcFileNameArray = array();
$ps1FileNameArray = array();
$xbox360FileNameArray = array();
$pcFileNameArray = array();

$gameDirArray = array($gcImagePath, $ps1ImagePath, $xbox360ImagePath, $pcImagePath);
$relativegameDirArray = array($relativegcImagePath, $relativeps1ImagePath, $relativexbox360ImagePath, $relativepcImagePath);

$fileNameArray = array($gcFileNameArray, $ps1FileNameArray, $xbox360FileNameArray, $pcFileNameArray);

$i = 0;
foreach ($gameDirArray as $dir){
    $path = $dir;
    $files = scandir($path);
    foreach ($files as $file){
        if ($file != "." && $file != "..") {
            array_push($fileNameArray[$i], $file);
        }
    }
    $i += 1;
}
$i = 0;
foreach ($fileNameArray as $fileArray){
    $index = 0;
    foreach ($fileArray as $file){
        $newFile = "$relativegameDirArray[$i]$file";
        array_push($fileArray[$i],$newFile);
        $index += 1;
    
    }
    $i += 1;
}

echo json_encode($fileNameArray);
?>
<?php

//include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
// utility functions
$path = "../../..";
//echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
include $path . "/FuturesAccountManagerSystem/DataPersistenceLayer/Server/ServerManager.php";

$UserId = isset($_GET["UserId"]) ? $_GET["UserId"] : "";
$Password = isset($_GET["Password"]) ? $_GET["Password"] : "";
$UserId="frankzch";
$Password="123456";
    


$testAccount = new ServerManager();

//echo "<br>GetAllMainAccountData: <br>";

$rawData = $testAccount->RestartSharpSpeedServer($UserId,$Password);

echo $rawData;

?>
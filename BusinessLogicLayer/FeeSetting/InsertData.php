<?php

//include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
// utility functions
$path = "../../..";
//echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
include $path . "/FuturesAccountManagerSystem/DataPersistenceLayer/FeeSetting/FeeSettingManager.php";
include $path . "/FuturesAccountManagerSystem/DataPersistenceLayer/FeeSetting/FeeSettingRowClass.php";

$data = "";
foreach ($_GET as $key => $value) {
    if (strlen($data) == 0) {
        $data .= $key . "=" . $value;
    } else {
        $data .= "&" . $key . "=" . $value;
    }
}


//echo $data;


$testAccount = new FeeSettingManager();
if ($data) {

    $response = $testAccount->InsertData($data);

}
echo($response);

?>
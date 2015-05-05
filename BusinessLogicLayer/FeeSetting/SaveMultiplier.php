<?php

//include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
// utility functions
$path = "../../..";
//echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
include $path . "/FuturesAccountManagerSystem/DataPersistenceLayer/FeeSetting/FeeSettingManager.php";
include $path . "/FuturesAccountManagerSystem/DataPersistenceLayer/FeeSetting/FeeSettingRowClass.php";

$data = array();
foreach ($_GET as $key => $value) {
    $data[$key] = $value;
}

$testAccount = new FeeSettingManager();
if ($data) {

    $response = $testAccount->SaveStandardFeeMultiplier(json_encode($data));

}
echo($response);

?>
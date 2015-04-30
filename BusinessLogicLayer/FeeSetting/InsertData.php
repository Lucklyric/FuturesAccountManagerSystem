<?php

//include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
// utility functions
$path = "../../..";
//echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
include $path . "/FuturesAccountManagerSystem/DataPersistenceLayer/FeeSetting/FeeSettingManager.php";
include $path . "/FuturesAccountManagerSystem/DataPersistenceLayer/FeeSetting/FeeSettingRowClass.php";

$AdminAccount = "frankzch";
$AdminPassword = "123456";
$TableName = "Commission";

if ($TableName) {
    $data = "admin=" . $AdminAccount . "&password=" . $AdminPassword . "&tablename=" . $TableName;
    foreach ($_GET as $key => $value) {
        $data .= "&" . $key . "=" . $value;
    }
    echo $data;
} else {

    echo "Some data is missing!";

}

//echo $data;
echo "<br>";

$testAccount = new FeeSettingManager();
if ($data) {

    $response = $testAccount->InsertData($data);

}
echo($response);

?>
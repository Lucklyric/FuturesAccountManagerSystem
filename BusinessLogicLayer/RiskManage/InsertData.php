<?php

//include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
// utility functions
$path = "../../..";
//echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
include $path . "/FuturesAccountManagerSystem/DataPersistenceLayer/RiskManager/RiskManageRowClass.php";
include $path . "/FuturesAccountManagerSystem/DataPersistenceLayer/RiskManager/RiskManager.php";

$data = "";
foreach ($_GET as $key => $value) {
    if (strlen($data) == 0) {
        $data .= $key . "=" . $value;
    } else {
        $data .= "&" . $key . "=" . $value;
    }
}


$RiskManager = new RiskManager();
if ($data) {

    $response = $RiskManager->InsertData($data);

}
echo($response);

?>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Alvin
 * Date: 2015-04-22
 * Time: 1:01 AM
 */
$path = "../../..";
include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccount/MainAccountManager.php";

if ($_GET["Method"] == "getMainStatus"){
    $MainId=isset($_GET["MainId"]) ? $_GET["MainId"] :"";
    $AdminAccount=isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] :"";
    $AdminPassword=isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] :"";
    $manager = new MainAccountManager();
    $result = $manager->GetMainAccountConnectStatus($AdminAccount,$AdminPassword,$MainId);
    echo json_encode($result);
}elseif ($_GET["Method"] == "connectMain"){
    $MainId=isset($_GET["MainId"]) ? $_GET["MainId"] :"";
    $AdminAccount=isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] :"";
    $AdminPassword=isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] :"";
    $manager = new MainAccountManager();
    $result = $manager->ConnectMainAccount($AdminAccount,$AdminPassword,$MainId);
    echo json_encode($result);
}elseif ($_GET["Method"] == "getNeedSyncOrders") {
    $MainId = isset($_GET["MainId"]) ? $_GET["MainId"] : "";
    $AdminAccount = isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] : "";
    $AdminPassword = isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] : "";
    $manager = new MainAccountManager();
    $result = $manager->GetNeedSyncOrders($AdminAccount, $AdminPassword, $MainId);
    echo json_encode($result);
}elseif ($_GET["Method"] == "getNeedSyncPositions") {
    $MainId = isset($_GET["MainId"]) ? $_GET["MainId"] : "";
    $AdminAccount = isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] : "";
    $AdminPassword = isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] : "";
    $manager = new MainAccountManager();
    $result = $manager->GetNeedSyncPositions($AdminAccount, $AdminPassword, $MainId);
    echo json_encode($result);
}elseif ($_GET["Method"] == "onSyncOrder") {
    $data = isset($_GET["Data"]) ? $_GET["Data"] : "";
    $manager = new MainAccountManager();
    $result = $manager->OnRspSyncOrders($data);
    echo json_encode($result);
}
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
}elseif ($_POST["Method"] == "onSyncOrder") {
    $data = isset($_POST["Data"]) ? $_POST["Data"] : "";
    $manager = new MainAccountManager();
    $result = $manager->OnRspSyncOrders($data);
    echo json_encode($result);
}elseif ($_POST["Method"] == "onSyncPosition") {
    $data = isset($_POST["Data"]) ? $_POST["Data"] : "";
    $manager = new MainAccountManager();
    $result = $manager->OnRspSyncPosition($data);
    echo json_encode($result);
}elseif ($_GET["Method"] == "disableOrEnable") {
    $SubId = isset($_GET["SubId"]) ? $_GET["SubId"] : "";
    $AdminAccount = isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] : "";
    $AdminPassword = isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] : "";
    $Enable = isset($_GET["Enable"]) ? $_GET["Enable"] : "";
    $Source = isset($_GET["Source"]) ? $_GET["Source"] : "";
    $manager = new MainAccountManager();
    $result = $manager->DisableOrEnableAccountFromWeb($AdminAccount,$AdminPassword,$SubId,$Enable,$Source);
    echo json_encode($result);
}
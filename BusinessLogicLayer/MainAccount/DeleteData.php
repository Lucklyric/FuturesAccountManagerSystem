
<?php

    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = "../../..";
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccount/MainRowClass.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccount/MainAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/SubAccount/SubRowClass.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/SubAccount/SubAccountManager.php";

    $MainId=isset($_GET["MainId"]) ? $_GET["MainId"] :"";
    $Channel=isset($_GET["Channel"]) ? $_GET["Channel"] :"";
    $CompanyName=isset($_GET["CompanyName"]) ? $_GET["CompanyName"] :"";
    $CompanyServer=isset($_GET["CompanyServer"]) ? $_GET["CompanyServer"] :"";
    $AccountId=isset($_GET["AccountId"]) ? $_GET["AccountId"] :"";
    $AccountPassword=isset($_GET["AccountPassword"]) ? $_GET["AccountPassword"] :"";
    $StaticEquity=isset($_GET["StaticEquity"]) ? $_GET["StaticEquity"] :"";
    $State=isset($_GET["State"]) ? $_GET["State"] :"";
    $TableName=isset($_GET["TableName"]) ? $_GET["TableName"] :"";
    //编号
    $RowId=isset($_GET["RowId"]) ? $_GET["RowId"] :"";

    $AdminAccount=isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] :"";
    $AdminPassword=isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] :"";

    $MaxMoney=isset($_GET["MaxMoney"]) ? $_GET["MaxMoney"] :"";

    $TableName="MainAccount";

    $State="2";

    $Channel="CTP";
    $CompanyName="游云模拟";
    $CompanyServer="模拟test";
    $AccountId="00044";
    $AccountPassword="3";
    $StaticEquity="0.1";
    $MaxMoney="200";
    //$data="";
    if($TableName && $State && $Channel && $CompanyName && $CompanyServer && $AccountId && $AccountPassword && $MaxMoney){
        $data="admin=".$AdminAccount."&password=".$AdminPassword."&tablename=".$TableName."&state=".$State."&编号=".
            $RowId;
    }else{

        echo "Some data is missing!";

    }

    //echo $data;

    $testAccount = new MainAccountManager();
    $SubAccount = new SubAccountManager();
    if($data){

        $response=$testAccount->InsertData($data);

    }
    echo($response);

    ?>
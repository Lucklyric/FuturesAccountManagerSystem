
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

    $AdminAccount=isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] :"";
    $AdminPassword=isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] :"";
    $port=10083;
    
    $TableName="MainTable";
    $AdminAccount="aaa";
    $AdminPassword="123";
    $State="1";
    $Channel="2";
    $CompanyName="海通期货";
    $CompanyServer="test";
    $AccountId="2";
    $AccountPassword="3";
    $initialdata="Port=";
    //$data="";
    if($TableName && $State && $Channel && $CompanyName && $CompanyServer && $AccountId && $AccountPassword){
    $data=$initialdata.$port."&AdminAccount=".$AdminAccount."&AdminPassword=".$AdminPassword."&TableName=".$TableName."&RowState=".$State."&通道=".$Channel."&经纪公司=".$CompanyName."&经纪公司服务器=".$CompanyServer."&账户ID=".$AccountId."&账户密码=".$AccountPassword;
        echo $data;
    }else{
    
        echo "Some data is missing!";
    
    }
    
    //echo $data;
    echo "<br>";

    $testAccount = new MainAccountManager();
    $SubAccount = new SubAccountManager();
    if($data){
        
        $response=$testAccount->InsertData($data);
        
    }
    echo($response);
    
    ?>
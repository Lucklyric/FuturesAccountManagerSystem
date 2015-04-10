
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
    
    $TableName="MainAccount";
    $AdminAccount="frankzch";
    $AdminPassword="123456";
    $State="1";
    
    $Channel="CTP";
    $CompanyName="游云模拟";
    $CompanyServer="模拟线路";
    $AccountId="00044";
    $AccountPassword="3";
    $StaticEquity="0.1";
    $initialdata="Port=";
    //$data="";
    if($TableName && $State && $Channel && $CompanyName && $CompanyServer && $AccountId && $AccountPassword){
    $data="AdminAccount=".$AdminAccount."&AdminPassword=".$AdminPassword."&TableName=".$TableName."&RowState=".$State."&编号=0"."&通道=".$Channel."&经纪公司=".$CompanyName."&经纪公司服务器=".$CompanyServer."&账户ID=".$AccountId."&账户密码=".$AccountPassword."&静态权益=".$StaticEquity;
       // echo $data;
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
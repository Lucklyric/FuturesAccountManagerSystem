
<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = "../../..";
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/SubAccount/SubAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/SubAccount/SubRowClass.php";
    
    $SubSystemId=isset($_GET["SubSystemId"]) ? $_GET["SubSystemId"] :"";
    $SubId=isset($_GET["SubId"]) ? $_GET["SubId"] :"";
    $SubPass=isset($_GET["SubPass"]) ? $_GET["SubPass"] :"";
    $Restriction=isset($_GET["Restriction"]) ? $_GET["Restriction"] :"";
    $CreateTime=isset($_GET["CreateTime"]) ? $_GET["CreateTime"] :"";
    $LastLoginTime=isset($_GET["LastLoginTime"]) ? $_GET["LastLoginTime"] :"";
    $UserName=isset($_GET["UserName"]) ? $_GET["UserName"] :"";
    $ContactInfo=isset($_GET["ContactInfo"]) ? $_GET["ContactInfo"] :"";
    $MainId=isset($_GET["MainId"]) ? $_GET["MainId"] :"";
    $RiskManagementGroup=isset($_GET["RiskManagementGroup"]) ? $_GET["RiskManagementGroup"] :"";
    $RateGroupName=isset($_GET["RateGroupName"]) ? $_GET["RateGroupName"] :"";
    
    $AdminAccount=isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] :"";
    $AdminPassword=isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] :"";
    $port=10083;
    
    $TableName="SubAccount";
    $State="2";
    $Channel="2";
    $CompanyName="海通期货";
    $CompanyServer="test";
    $AccountId="2";
    $AccountPassword="3";
    $initialdata="Port=";
    
    if($TableName && $State && $SubSystemId && $SubId && $SubPass && $Restriction && $CreateTime && $LastLoginTime&& $UserName && $ContactInfo && $MainId && $RiskManagementGroup && $RateGroupName){
        $data=$initialdata.$port."&AdminAccount=".$AdminAccount."&AdminPassword=".$AdminPassword."&TableName=".$TableName."&RowState=".$State."&编号=".$SubSystemId."&子账户ID=".$SubId."&子账户密码=".$SubPass."&限制使用=".$Restriction."&创建时间=".$CreateTime."&最后登录时间=".$LastLoginTime."&用户姓名=".$UserName."&联系方式=".$ContactInfo."&主账户编号=".$MainId."&风控组名称=".$RiskManagementGroup."&费率组名称=".$RateGroupName;
        echo $data;
    }else{
        
        echo "Some data is missing!";
        
    }
    
    //echo $data;
    echo "<br>";
    
    $testAccount = new SubAccountManager();
    if($data){
        
        $response=$testAccount->DeleteData($data);
        
    }
    echo($response);
    
    ?>
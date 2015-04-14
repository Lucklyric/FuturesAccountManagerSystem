
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
    $MoneyAccount=isset($_GET["MoneyAccount"]) ? $_GET["MoneyAccount"] :"";
    $MoneyRatio=isset($_GET["MoneyRatio"]) ? $_GET["MoneyRatio"] :"";
    $SecondMain=isset($_GET["SecondMain"]) ? $_GET["SecondMain"] :"";
    
    $AdminAccount=isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] :"";
    $AdminPassword=isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] :"";
    
    $TableName="SubAccount";
    $AdminAccount="frankzch";
    $AdminPassword="123456";
    $TableName="SubAccount";
    $SubId="shw9794602";
    $SubPass="testpass";
    $Restriction="True";
    $CreateTime="2015-4-10 17:19:22";
    $LastLoginTime="2015-4-10 17:19:23";
    $UserName="test";
    $ContactInfo="test";
    $MainId="5";
    $RiskManagementGroup="test";
    $RateGroupName="test";
    $MoneyAccount="123";
    $MoneyRatio="1:2";
    $SecondMain="False";
    $State="2";
    
    if($TableName && $State ){
        $data="admin=".$AdminAccount."&password=".$AdminPassword."&tablename=".$TableName."&state=".$State."&编号=".
            $SubSystemId;
        echo "This is hardcoded test data:<br>";
        echo $data;
    }else{
        
        echo "Some data is missing!";
        
    }
    
    //echo $data;
    echo "<br>";
    
    $testAccount = new SubAccountManager();
    if($data){
        
        $response=$testAccount->InsertData($data);
        
    }
    echo($response);
    
    ?>
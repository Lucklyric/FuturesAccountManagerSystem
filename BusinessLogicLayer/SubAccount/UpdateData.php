
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

    $TableName="SubAccount";
   // $SubSystemId="24";
    //$SubId="shw9794602";
    //$SubPass="testpass";
//    $Restriction="False";
 //   $CreateTime="2015-4-10 17:19:22";
 //   $LastLoginTime="2015-4-10 17:19:23";
    //$UserName="test";
    //$ContactInfo="test";
    //$MainId="5";
    //$RiskManagementGroup="test";
    //$RateGroupName="test";
    //$MoneyAccount="123";
   // $MoneyRatio="1:2";
    $SecondMain="False";
    $State="3";
    
    if($TableName && $State ){
        $data="admin=".$AdminAccount."&password=".$AdminPassword."&tablename=".$TableName."&state=".$State."&编号=".$SubSystemId."&子账户ID=".$SubId."&子账户密码=".$SubPass."&限制使用=".$Restriction."&创建时间=".$CreateTime."&最后登录时间=".$LastLoginTime."&用户姓名=".$UserName."&联系方式=".$ContactInfo."&主账户编号=".$MainId."&风控组名称=".$RiskManagementGroup."&费率组名称=".$MoneyRatio."&初始配资比例=".$MoneyRatio."&二级主账户=".$SecondMain;
//        echo "This is hardcoded test data:<br>";
 //       echo $data;
    }else{
        echo "Some data is missing!";
    }
    

    $testAccount = new SubAccountManager();
    if($data){
        
        $response=$testAccount->InsertData($data);
        
    }
    echo($response);
    
    ?>
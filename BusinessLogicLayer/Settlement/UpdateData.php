
<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = "../../..";
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/Settlement/SettlementAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/Settlement/SettlementRowClass.php";
    
    $Id=isset($_GET["Id"]) ? $_GET["Id"] :"";
    $SubAccountName=isset($_GET["SubAccountName"]) ? $_GET["SubAccountName"] :"";
    
    $MainId=isset($_GET["MainId"]) ? $_GET["MainId"] :"";
    
    $InAndOut=isset($_GET["InAndOut"]) ? $_GET["InAndOut"] :"";
    $UpdateTime=isset($_GET["UpdateTime"]) ? $_GET["UpdateTime"] :"";
    $Priority=isset($_GET["Priority"]) ? $_GET["Priority"] :"";
    $Comment=isset($_GET["Comment"]) ? $_GET["Comment"] :"";
    
    $State=isset($_GET["State"]) ? $_GET["State"] :"";
    $TableName=isset($_GET["TableName"]) ? $_GET["TableName"] :"";
    
    $port=10083;
    $AdminAccount=isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] :"";
    $AdminPassword=isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] :"";
    $TableName="MoneyInAndOut";
    $State="3";
    
    $AdminAccount="frankzch";
    $AdminPassword="123456";
    $Id="200";
    $SubAccountName="810";
    $MainId=3;
    $InAndOut=33.572;
    $UpdateTime="2015-04-13 00:00:00";
    $Priority="test";
    $Comment="newtest";
    
    $initialdata="Port=";
    //    $data=admin=frankzch&password=123456&tablename=Settlement&state=1&编号=0&子账户名称=810&静态权益=2000000.000&手续费=33.572&平仓盈亏=315.000&持仓盈亏=-170.000&占用保证金=7180.650&动态权益=1999481.428&风险度=0.004&结算日期=2015-04-13&结算时间=08:30:36&优先资金=1000000.000;
    if($TableName && $State && $SubAccountName && $MainId && $InAndOut && $UpdateTime && $Priority){
        $data="admin=".$AdminAccount."&password=".$AdminPassword."&tablename=".$TableName."&state=".$State."
        &编号=".$Id."&子账户名称=".$SubAccountName."&主账户编号=".$MainId."&出入金=".$InAndOut."&更新时间=".$UpdateTime.
            "&优先劣后=".$Priority."&备注=".$Comment;
        echo $data;
    }else{
        
        echo "Some data is missing!";
        
    }
    
    //echo $data;
    echo "<br>";
    
    $SettlementAccount = new SettlementAccountManager();
    
    if($data){
        
        $response=$SettlementAccount->InsertData($data);
        
    }
    echo($response);
    
    ?>

<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = $_SERVER['DOCUMENT_ROOT'];
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/SubAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/SettlementAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainRowClass.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/SubRowClass.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/SettlementRowClass.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/RiskManageRowClass.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/RiskManager.php";
    
    
    $Id=isset($_GET["Id"]) ? $_GET["Id"] :"";
    $GroupName=isset($_GET["GroupName"]) ? $_GET["GroupName"] :"";
    $TradePermitTime=isset($_GET["TradePermitTime"]) ? $_GET["TradePermitTime"] :"";
    $OpenPositionForbiddenTime=isset($_GET["OpenPositionForbiddenTime"]) ? $_GET["OpenPositionForbiddenTime"] :"";
    $SellSharesTime=isset($_GET["SellSharesTime"]) ? $_GET["SellSharesTime"] :"";
    $RiskAlertLine=isset($_GET["RiskAlertLine"]) ? $_GET["RiskAlertLine"] :"";
    $RiskAlertLog=isset($_GET["RiskAlertLog"]) ? $_GET["RiskAlertLog"] :"";
    $RiskForbiddenLine=isset($_GET["RiskForbiddenLine"]) ? $_GET["RiskForbiddenLine"] :"";
    $RiskForbiddenLog=isset($_GET["RiskForbiddenLog"]) ? $_GET["RiskForbiddenLog"] :"";
    $EquityAlertLine=isset($_GET["EquityAlertLine"]) ? $_GET["EquityAlertLine"] :"";
    $EquityBalanceLine=isset($_GET["EquityBalanceLine"]) ? $_GET["EquityBalanceLine"] :"";
    $OvernightSellShareLine=isset($_GET["OvernightSellShareLine"]) ? $_GET["OvernightSellShareLine"] :"";
    $OvernightSellShareDetail=isset($_GET["OvernightSellShareDetail"]) ? $_GET["OvernightSellShareDetail"] :"";
    $DayLimitation=isset($_GET["DayLimitation"]) ? $_GET["DayLimitation"] :"";

    
    $TableName="riskmanage";
    $State="1";
    
    if($TableName && $State && $Id && $GroupName && $TradePermitTime && $OpenPositionForbiddenTime && $SellSharesTime && $RiskAlertLine && $RiskAlertLog && $RiskForbiddenLine && $RiskForbiddenLog && $EquityAlertLine &&  $EquityBalanceLine && $OvernightSellShareLine && $OvernightSellShareDetail && $DayLimitation){
    $data=$initialdata.$TableName."&state=".$State."&通道=".$Channel."&经纪公司=".$CompanyName."&经纪公司服务器=".$CompanyServer."&账户ID=".$AccountId."&账户密码=".$AccountPassword;
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
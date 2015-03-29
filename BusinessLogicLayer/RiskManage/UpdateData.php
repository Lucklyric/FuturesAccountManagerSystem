
<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = "../../..";
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/RiskManager/RiskManageRowClass.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/RiskManager/RiskManager.php";
    
    
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
    
    $AdminAccount=isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] :"";
    $AdminPassword=isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] :"";
    $port=10083;
    $TableName="riskmanage";
    $State="3";
    $initialdata="Port=";
    
    
    if($TableName && $State && $Id && $GroupName && $TradePermitTime && $OpenPositionForbiddenTime && $SellSharesTime && $RiskAlertLine && $RiskAlertLog && $RiskForbiddenLine && $RiskForbiddenLog && $EquityAlertLine &&  $EquityBalanceLine && $OvernightSellShareLine && $OvernightSellShareDetail && $DayLimitation){
        $data=$initialdata.$port."&AdminAccount=".$AdminAccount."&AdminPassword=".$AdminPassword."&TableName=".$TableName."&RowState=".$State."&编号=".$Id."&组名称=".$GroupName."&允许交易合约=".$TradePermitTime."&禁止开仓时间段=".$OpenPositionForbiddenTime."&减仓时间段=".$SellSharesTime."&风险度警告线=".$RiskAlertLine."&风险度警告线详细=".$RiskAlertLog."&风险度禁开线=".$RiskForbiddenLine."&风险度禁开线详细=".$RiskForbiddenLog."&权益警告线=".$EquityAlertLine."&权益强平线=".$EquityBalanceLine."&隔夜减仓线=".$OvernightSellShareLine."&隔夜减仓线详细=".$OvernightSellShareDetail."&每日撤单次数上限=".$DayLimitation;
        echo $data;
    }else{
        
        echo "Some data is missing!";
        
    }
    
    //echo $data;
    echo "<br>";
    
    $RiskManager = new RiskManager();
    if($data){
        
        $response=$RiskManager->UpdateData($data);
        
    }
    echo($response);
    
    ?>
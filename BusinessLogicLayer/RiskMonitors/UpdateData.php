
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
    $TradeForbiddenTime=isset($_GET["TradeForbiddenTime"]) ? $_GET["TradeForbiddenTime"] :"";
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
    $LossAlert=isset($_GET["LossAlert"]) ? $_GET["LossAlert"] :"";
    $LossBalance=isset($_GET["LossBalance"]) ? $_GET["LossBalance"] :"";
    $LossDayLimitation=isset($_GET["LossDayLimitation"]) ? $_GET["LossDayLimitation"] :"";
    $LossNextDay=isset($_GET["LossNextDay"]) ? $_GET["LossNextDay"] :"";
    $EarnAlert=isset($_GET["EarnAlert"]) ? $_GET["EarnAlert"] :"";
    $EarnBalance=isset($_GET["EarnBalance"]) ? $_GET["EarnBalance"] :"";
    $EarnDayLimitation=isset($_GET["EarnDayLimitation"]) ? $_GET["EarnDayLimitation"] :"";
    $EarnNextDay=isset($_GET["EarnNextDay"]) ? $_GET["EarnNextDay"] :"";
    
    
    $AdminAccount=isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] :"";
    $AdminPassword=isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] :"";
    
    $AdminAccount="frankzch";
    $AdminPassword="123456";
    $TableName="RiskManage";
    $State="3";
    $Id="0";
    $GroupName="test";
    $TradePermitTime="new";
    $TradeForbiddenTime="test";
    $OpenPositionForbiddenTime="test";
    $SellSharesTime="test";
    $RiskAlertLine="0.8";
    $RiskAlertLog="test";
    $RiskForbiddenLine="0.1";
    $RiskForbiddenLog="1";
    $EquityAlertLine="1";
    $EquityBalanceLine="0.5";
    $OvernightSellShareLine="1";
    $OvernightSellShareDetail="new";
    $DayLimitation="1";
    $LossAlert="1";
    $LossBalance="1";
    $LossDayLimitation="1";
    $LossNextDay="1";
    $EarnAlert="1";
    $EarnBalance="1";
    $EarnDayLimitation="1";
    $EarnNextDay="1";
    //admin=frankzch&password=123456&tablename=RiskManage&state=1&编号=0&组名称=test&允许交易合约=new&不允许交易合约=test&禁止开仓时间段=test&减仓时间段=test&风险度警告线=0.8&风险度警告线详细=test&风险度禁开线=0.1&风险度禁开线详细=1&权益警告线=1.0&权益强平线=0.5&隔夜减仓线=1.0&隔夜减仓线详细=new&每日撤单次数上限=11&亏损预警=1.0&亏损强平=1.0&亏损日内限制=11&亏损隔夜限制=12&净值预警=1.0&净值强平=1.0&净值日内限制=11&净值隔夜限制=11
    
    if($TableName && $State){
        $data="admin=".$AdminAccount."&password=".$AdminPassword."&tablename=".$TableName."&state=".$State."&编号=".$Id."&组名称=".$GroupName."&允许交易合约=".$TradePermitTime."&不允许交易合约=".$TradeForbiddenTime."&禁止开仓时间段=".$OpenPositionForbiddenTime."&减仓时间段=".$SellSharesTime."&风险度警告线=".$RiskAlertLine."&风险度警告线详细=".$RiskAlertLog."&风险度禁开线=".$RiskForbiddenLine."&风险度禁开线详细=".$RiskForbiddenLog."&权益警告线=".$EquityAlertLine."&权益强平线=".$EquityBalanceLine."&隔夜减仓线=".$OvernightSellShareLine."&隔夜减仓线详细=".$OvernightSellShareDetail."&每日撤单次数上限=".$DayLimitation."&亏损预警=".$LossAlert."&亏损强平=".$LossBalance."&亏损日内限制=".$LossDayLimitation."&亏损隔夜限制=".$LossNextDay."&净值预警=".$EarnAlert."&净值强平=".$EarnBalance."&净值日内限制=".$EarnDayLimitation."&净值隔夜限制=".$EarnNextDay;
        //echo $data;
    }else{
        
        echo "Some data is missing!";
        
    }
    

    $RiskManager = new RiskManager();
    if($data){
        
        $response=$RiskManager->InsertData($data);
        
    }
    echo($response);
    
    ?>
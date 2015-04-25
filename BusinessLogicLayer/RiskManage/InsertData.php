
<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = "../../..";
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/RiskManager/RiskManageRowClass.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/RiskManager/RiskManager.php";
    
    $AdminAccount="frankzch";
    $AdminPassword="123456";
    $TableName="RiskManage";

    if($TableName){
//    $data="admin=".$AdminAccount."&password=".$AdminPassword."&tablename=".$TableName."&state=".$State."&编号=".$Id."&组名称=".$GroupName."&允许交易合约=".$TradePermitTime."&不允许交易合约=".$TradeForbiddenTime."&禁止开仓时间段=".$OpenPositionForbiddenTime."&减仓时间段=".$SellSharesTime."&风险度警告线=".$RiskAlertLine."&风险度警告线详细=".$RiskAlertLog."&风险度禁开线=".$RiskForbiddenLine."&风险度禁开线详细=".$RiskForbiddenLog."&权益警告线=".$EquityAlertLine."&权益强平线=".$EquityBalanceLine."&隔夜减仓线=".$OvernightSellShareLine."&隔夜减仓线详细=".$OvernightSellShareDetail."&每日撤单次数上限=".$DayLimitation."&亏损预警=".$LossAlert."&亏损强平=".$LossBalance."&亏损日内限制=".$LossDayLimitation."&亏损隔夜限制=".$LossNextDay."&净值预警=".$EarnAlert."&净值强平=".$EarnBalance."&净值日内限制=".$EarnDayLimitation."&净值隔夜限制=".$EarnNextDay;
        $data = "admin=".$AdminAccount."&password=".$AdminPassword."&tablename=".$TableName;
        foreach($_GET as $key => $value)
        {
            $data .= "&".$key."=".$value;
        }
        echo $data;
    }else{
    
        echo "Some data is missing!";
    
    }
    
    //echo $data;
    echo "<br>";
    
    $RiskManager = new RiskManager();
    if($data){
        
        $response=$RiskManager->InsertData($data);
    
    }
    echo($response);
    
    ?>

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
    
    $SettlementId=isset($_GET["SettlementId"]) ? $_GET["SettlementId"] :"";
    $SubAccountName=isset($_GET["SubAccountName"]) ? $_GET["SubAccountName"] :"";
    $StaticEquity=isset($_GET["StaticEquity"]) ? $_GET["StaticEquity"] :"";
    $CompanyServer=isset($_GET["CompanyServer"]) ? $_GET["CompanyServer"] :"";
    $Poundage=isset($_GET["Poundage"]) ? $_GET["Poundage"] :"";
    $ProfitandLoss=isset($_GET["ProfitandLoss"]) ? $_GET["ProfitandLoss"] :"";
    $PresentPandL=isset($_GET["PresentPandL"]) ? $_GET["PresentPandL"] :"";
    $MarginPercentage=isset($_GET["MarginPercentage"]) ? $_GET["MarginPercentage"] :"";
    $DynamicEquity=isset($_GET["DynamicEquity"]) ? $_GET["DynamicEquity"] :"";
    $RiskPrediction=isset($_GET["RiskPrediction"]) ? $_GET["RiskPrediction"] :"";
    $SettlementDate=isset($_GET["SettlementDate"]) ? $_GET["SettlementDate"] :"";
    $SettlementTime=isset($_GET["SettlementTime"]) ? $_GET["SettlementTime"] :"";
    $PriorityFunding=isset($_GET["PriorityFunding"]) ? $_GET["PriorityFunding"] :"";

    
    $TableName="Settlement";
    $State="1";
//    $Channel="2";
//    $CompanyName="海通期货";
//    $CompanyServer="test";
//    $AccountId="2";
//    $AccountPassword="3";
//    $initialdata="tablename=";
//    $data="";
    if($TableName && $State && $SettlementId && $SubAccountName && $StaticEquity && $CompanyServer && $Poundage &&$ProfitandLoss && $PresentPandL && $MarginPercentage && $DynamicEquity && $RiskPrediction && $SettlementDate && $SettlementTime && $PriorityFunding && $MoneyChanged){
    $data=$initialdata.$TableName."&state=".$State."&编号=".$SettlementId."&子账户名称=".$SubAccountName."&静态权益=".$StaticEquity."&经纪公司服务器=".$CompanyServer."&手续费=".$Poundage."&平仓盈亏=".$ProfitandLoss."&持仓盈亏=".$PresentPandL."&占用保证金=".$MarginPercentage."&动态权益=".$DynamicEquity."&风险度=".$RiskPrediction."结算日期=".$SettlementDate."结算时间=".$SettlementTime."优先资金=".$PriorityFunding;
        echo $data;
    }else{
    
        echo "Some data is missing!";
    
    }
    
    //echo $data;
    echo "<br>";
    
    $testAccount = new SettlementAccountManager();
    if($data){
        
        $response=$testAccount->UpdateData($data);
    
    }
    echo($response);
    
    ?>
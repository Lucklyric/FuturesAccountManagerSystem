
<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = $_SERVER['DOCUMENT_ROOT'];
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/Settlement/SettlementAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/Settlement/SettlementRowClass.php";
    
    $Id=isset($_GET["Id"]) ? $_GET["Id"] :"";
    $SubAccountName=isset($_GET["SubAccountName"]) ? $_GET["SubAccountName"] :"";
    $MainId=isset($_GET["MainId"]) ? $_GET["MainId"] :"";
    $InAndOut=isset($_GET["InAndOut"]) ? $_GET["InAndOut"] :"";
    $UpdateTime=isset($_GET["UpdateTime"]) ? $_GET["UpdateTime"] :"";
    $Priority=isset($_GET["Priority"]) ? $_GET["Priority"] :"";
    
    $State=isset($_GET["State"]) ? $_GET["State"] :"";
    $TableName=isset($_GET["TableName"]) ? $_GET["TableName"] :"";
    
    $port=10083;
    $AdminAccount=isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] :"";
    $AdminPassword=isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] :"";
    $TableName="moneyinandout";
    $State="3";
    
    $initialdata="Port=";
    
    if($TableName && $State && $Id && $SubAccountName && $MainId && $InAndOut && $UpdateTime && $Priority){
        $data=$initialdata.$port."&AdminAccount=".$AdminAccount."&AdminPassword=".$AdminPassword."&TableName=".$TableName."&RowState=".$State."&编号=".$Id."&子账户名称=".$SubAccountName."&主账户编号=".$MainId."&出入金=".$InAndOut."&更新时间=".$UpdateTime."&优先劣后=".$Priority;
        echo $data;
    }else{
        
        echo "Some data is missing!";
        
    }

    //echo $data;
    echo "<br>";
    
    $SettlementAccount = new SettlementAccountManager();
    
    if($data){
        
        $response=$testAccount->InsertData($data);
        
    }
    echo($response);
    
    ?>

<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = $_SERVER['DOCUMENT_ROOT'];
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/FeeSetting/FeeSettingManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/FeeSetting/FeeSettingRowClass.php";
    
    $Id=isset($_GET["Id"]) ? $_GET["Id"] :"";
    $GroupName=isset($_GET["GroupName"]) ? $_GET["GroupName"] :"";
    $Contract=isset($_GET["Contract"]) ? $_GET["Contract"] :"";
    $OpenPositionFee=isset($_GET["OpenPositionFee"]) ? $_GET["OpenPositionFee"] :"";
    $EqualPositionFee=isset($_GET["EqualPositionFee"]) ? $_GET["EqualPositionFee"] :"";
    $EqualNowFee=isset($_GET["EqualNowFee"]) ? $_GET["EqualNowFee"] :"";
    $FeeType=isset($_GET["FeeType"]) ? $_GET["FeeType"] :"";
    $EnsurementsPercentage=isset($_GET["EnsurementsPercentage"]) ? $_GET["EnsurementsPercentage"] :"";
    
    $AdminAccount=isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] :"";
    $AdminPassword=isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] :"";
    $port=10083;
    $TableName="feesetting";
    $State="1";
    $initialdata="Port=";
    
    if($TableName && $State && $Id && $GroupName && $Contract && $OpenPositionFee && $EqualPositionFee &&$EqualNowFee && $FeeType && $EnsurementsPercentage){
        $data=$initialdata.$port."&AdminAccount=".$AdminAccount."&AdminPassword=".$AdminPassword."&TableName=".$TableName."&RowState=".$State."&编号=".$Id."&组名称=".$GroupName."&合约=".$Contract."&开仓手续费=".$OpenPositionFee."&平仓手续费=".$EqualPositionFee."&平今手续费=".$EqualNowFee."&手续费类型=".$FeeType."&保证金比例=".$EnsurementsPercentage;
        echo $data;
    }else{
        
        echo "Some data is missing!";
        
    }
    
    //echo $data;
    echo "<br>";
    
    $testAccount = new FeeSettingManager();
    if($data){
        
        $response=$testAccount->InsertData($data);
        
    }
    echo($response);
    
    ?>
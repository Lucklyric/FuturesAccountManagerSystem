
<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = "../../..";
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
    $AdminAccount="frankzch";
    $AdminPassword="123456";
    $TableName="Commission";
    $State="2";
    $Id="0";
    $GroupName="test";
    $Contract="new";
    $OpenPositionFee="1";
    $EqualPositionFee="2";
    $EqualNowFee="1";
    $FeeType="绝对值";
    $EnsurementsPercentage="0";
    
    //admin=frankzch&password=123456&tablename=Commission&state=1&编号=1&组名称=test&合约=new&开仓手续费=0.1&平仓手续费=0.2&平今手续费=0.1&手续费类型=绝对值&保证金比例=1
    
    if($TableName && $State){
        $data="admin=".$AdminAccount."&password=".$AdminPassword."&tablename=".$TableName."&state=".$State."&编号=".$Id."&组名称=".$GroupName."&合约=".$Contract."&开仓手续费=".$OpenPositionFee."&平仓手续费=".$EqualPositionFee."&平今手续费=".$EqualNowFee."&手续费类型=".$FeeType."&保证金比例=".$EnsurementsPercentage;
        //echo $data;
    }else{
        
        echo "Some data is missing!";
        
    }
    
    //echo $data;

    
    $testAccount = new FeeSettingManager();
    if($data){
        
        $response=$testAccount->InsertData($data);
        
    }
    echo($response);
    
    ?>
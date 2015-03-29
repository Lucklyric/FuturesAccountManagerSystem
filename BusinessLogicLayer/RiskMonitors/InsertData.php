
<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = "../../..";
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/RiskMonitor/RiskMonitor.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/RiskMonitor/RiskMonitorRow.php";
    
    $SystemId=isset($_GET["SystemId"]) ? $_GET["SystemId"] :"";
    $Id=isset($_GET["Id"]) ? $_GET["Id"] :"";
    $Password=isset($_GET["Password"]) ? $_GET["Password"] :"";
    $SubAccount=isset($_GET["SubAccount"]) ? $_GET["SubAccount"] :"";
    $Name=isset($_GET["Name"]) ? $_GET["Name"] :"";
    $Contact=isset($_GET["Contact"]) ? $_GET["Contact"] :"";
    
    $TableName="riskmonitors";
    $State="1";
    $initialdata="Port=";
    $port=10083;
    
    if($TableName && $State && $SystemId && $Id && $Password && $SubAccount && $Name && $Contact){
    $data=$initialdata.$port."&AdminAccount=".$AdminAccount."&AdminPassword=".$AdminPassword."&TableName=".$TableName."&RowState=".$State."&编号=".$SystemId."&ID=".$Id."&密码=".$Password."&附属子账户=".$SubAccount."&姓名=".$Name."&联系方式=".$Contact;
        echo $data;
    }else{
    
        echo "Some data is missing!";
    
    }
    
    //echo $data;
    echo "<br>";
    
    $testAccount = new RiskMonitor();
    if($data){
        
        $response=$testAccount->InsertData($data);
    
    }
    echo($response);
    
    ?>
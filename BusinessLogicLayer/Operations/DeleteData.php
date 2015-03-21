
<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = $_SERVER['DOCUMENT_ROOT'];
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/Operations/OperationsManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/Operations/OperationsRow.php";
    
    
    
    
    $Id=isset($_GET["Id"]) ? $_GET["Id"] :"";
    $Functions=isset($_GET["Functions"]) ? $_GET["Functions"] :"";
    $Operator=isset($_GET["Operator"]) ? $_GET["Operator"] :"";
    $OperationTime=isset($_GET["OperationTime"]) ? $_GET["OperationTime"] :"";
    $OperationType=isset($_GET["OperationType"]) ? $_GET["OperationType"] :"";
    $OperationObject=isset($_GET["OperationObject"]) ? $_GET["OperationObject"] :"";
    $OperationDetail=isset($_GET["OperationDetail"]) ? $_GET["OperationDetail"] :"";
    $Judge=isset($_GET["Judge"]) ? $_GET["Judge"] :"";
    $JudgementResult=isset($_GET["JudgementResult"]) ? $_GET["JudgementResult"] :"";
    $JudgementTime=isset($_GET["JudgementTime"]) ? $_GET["JudgementTime"] :"";
    
    
    $TableName="operations";
    $State="2";
    $initialdata="Port=";
    $port=10083;
    
    if($TableName && $State && $Id && $Functions && $Operator && $OperationTime && $OperationType && $OperationObject && $OperationDetail && $Judge && $JudgementResult && $JudgementTime){
        $data=$initialdata.$port."&AdminAccount=".$AdminAccount."&AdminPassword=".$AdminPassword."&TableName=".$TableName."&RowState=".$State."&编号=".$Id."&功能模块=".$Functions."&操作员=".$Operator."&操作时间=".$OperationTime."&操作类型=".$OperationType."&操作对象=".$OperationObject."&操作内容=".$OperationDetail."&审核员=".$Judge."&审核结果=".$JudgementResult."&审核时间=".$JudgementTime;
        echo $data;
    }else{
        
        echo "Some data is missing!";
        
    }
    
    //echo $data;
    echo "<br>";
    
    $testAccount = new OperationsManager();
    if($data){
        
        $response=$testAccount->DeleteData($data);
        
    }
    echo($response);
    
    ?>
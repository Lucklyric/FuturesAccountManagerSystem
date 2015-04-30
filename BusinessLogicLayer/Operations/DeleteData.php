
<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = "../../..";
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
    
    
    $TableName="Operation";
    $State="2";
    
    $AdminAccount="frankzch";
    $AdminPassword="123456";
    $Id="1";
    $Functions="test";
    $Operator="new";
    $OperationTime="1911-09-01 00:00:00";
    $OperationType="test";
    $OperationObject="test";
    $OperationDetail="0.8";
    $Judge="test";
    $JudgementResult="待审核";
    $JudgementTime="1991-01-01 00:00:00";
    //admin=frankzch&password=123456&tablename=Operation&state=1&编号=1&功能模块=test&操作员=new&操作时间=1911-09-01 00:00:00&操作类型=test&操作对象=test&操作内容=0.8&审核员=test&审核结果=待审核&审核时间=1999-01-01 00:00:00
    if($TableName && $State){
        $data="admin=".$AdminAccount."&password=".$AdminPassword."&tablename=".$TableName."&state=".$State."&编号=".$Id."&功能模块=".$Functions."&操作员=".$Operator."&操作时间=".$OperationTime."&操作类型=".$OperationType."&操作对象=".$OperationObject."&操作内容=".$OperationDetail."&审核员=".$Judge."&审核结果=".$JudgementResult."&审核时间=".$JudgementTime;
       // echo $data;
    }else{
        
        echo "Some data is missing!";
        
    }
    

    
    $testAccount = new OperationsManager();
    if($data){
        
        $response=$testAccount->InsertData($data);
        
    }
    echo($response);
    
    ?>
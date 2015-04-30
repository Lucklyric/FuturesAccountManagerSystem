
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
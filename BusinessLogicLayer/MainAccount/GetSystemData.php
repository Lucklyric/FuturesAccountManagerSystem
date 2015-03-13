
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
    
    $MainId=isset($_GET["MainId"]) ? $_GET["MainId"] :"";

   
    if($MainId){
        $data=$MainId;
    }else{
    
        echo "Some data is missing!";
    
    }
    
    //echo $data;
    echo "<br>";
    
    $testAccount = new MainAccountManager();
    
    $AllChannels=array();
    $AllCompanyNames=array();
    $AllCompanyServers=array();
    $AllSystemData=array();
    
    if($data){
        
        $AllChannels=$testAccount->GetChannelData($data);
        $AllCompanyNames=$testAccount->GetCompanyName($data);
        $AllCompanyServers=$testAccount->GetCompanyServer($data);
        
        $AllSystemData["Channels"]=$AllChannels;
        $AllSystemData["Names"]=$AllCompanyNames;
        $AllSystemData["Servers"]=$AllCompanyServers;

        
        
    }
    echo json_encode($AllSystemData) ;
    
    ?>
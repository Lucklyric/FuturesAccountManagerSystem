
<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = $_SERVER['DOCUMENT_ROOT'];
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
   include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/Server/ServerManager.php";
    
    $UserId=isset($_GET["UserId"]) ? $_GET["UserId"] :"";
    $Password=isset($_GET["Password"]) ? $_GET["Password"] :"";
 
    
    $testAccount = new ServerManager();
    
    //echo "<br>GetAllMainAccountData: <br>";
    
    $rawData=$testAccount->ConnectAllSPServerMainAccounts();

    echo $rawData;
        
    ?>
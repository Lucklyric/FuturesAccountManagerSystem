
<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = "../../..";
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
   include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/Server/ServerManager.php";

$AdminAccount=isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] :"";
$AdminPassword=isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] :"";
    $testAccount = new ServerManager();
    
    //echo "<br>GetAllMainAccountData: <br>";
    
    $rawData=$testAccount->GetLoggedInSubAccountCount($AdminAccount,$AdminPassword);

    echo $rawData;
        
    ?>
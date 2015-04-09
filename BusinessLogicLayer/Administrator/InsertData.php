
<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = "../../..";
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/Administrator/AdministratorManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/Administrator/AdministratorRow.php";
    
    
    $Id=isset($_GET["Id"]) ? $_GET["Id"] :"";
    $Name=isset($_GET["Name"]) ? $_GET["Name"] :"";
    $Password=isset($_GET["Password"]) ? $_GET["Password"] :"";
    $SubMain=isset($_GET["SubMain"]) ? $_GET["SubMain"] :"";
    $Restriction=isset($_GET["Restriction"]) ? $_GET["Restriction"] :"";
    $UserName=isset($_GET["UserName"]) ? $_GET["UserName"] :"";
    $Contact=isset($_GET["Contact"]) ? $_GET["Contact"] :"";
    
    $AdminAccount="frankzch";
    $AdminPassword="123456";
    $Id="12";
    $Name="GCtest";
    $Password="testpass";
    $SubMain="1";
    $Restriction="2";
    $UserName="GameCloud";
    $Contact="CA";
    
    $TableName="administrators";
    $State="1";
    $initialdata="Port=";
    $port=10083;
    
    if($TableName && $State && $Id && $Name && $Password && $SubMain && $Restriction && $UserName && $Contact){
    $data=$initialdata.$port."&AdminAccount=".$AdminAccount."&AdminPassword=".$AdminPassword."&TableName=".$TableName."&RowState=".$State."&编号=".$Id."&名称=".$Name."&密码=".$Password."&附属主账户=".$SubMain."&模块权限=".$Restriction."&姓名=".$UserName."&联系方式=".$Contact;
        echo $data;
    }else{
    
        echo "Some data is missing!";
    
    }
    
    //echo $data;
    echo "<br>";
    
    $testAccount = new AdministratorManager();
    if($data){
        
        $response=$testAccount->InsertData($data);
    
    }
    echo($response);
    
    ?>
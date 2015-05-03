
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
//    $AdminPassword="123456";
    
    $TableName="Admin";
    $State="2";
    $Id="12";
    $Name="GCtest";
    $Password="testpass";
    $SubMain="1";
    $Restriction="2";
    $UserName="GameCloud";
    $Contact="CA";
    
    
    
    //admin=frankzch&password=123456&tablename=Admin&state=1&编号=1&名称=test&密码=new&附属主账户=0.1&模块权限=0.2&姓名=0.1&联系方式=1
    if($TableName && $State ){
        $data="admin=".$AdminAccount."&password=".$AdminPassword."&tablename=".$TableName."&state=".$State."&编号=".$Id."&名称=".$Name."&密码=".$Password."&附属主账户=".$SubMain."&模块权限=".$Restriction."&姓名=".$UserName."&联系方式=".$Contact;
       // echo $data;
    }else{
        
        echo "Some data is missing!";
        
    }
    
    //echo $data;

    
    $testAccount = new AdministratorManager();
    if($data){
        
        $response=$testAccount->InsertData($data);
        
    }
    echo($response);
    
    ?>

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
    $State=isset($_GET["State"]) ? $_GET["State"] :"";
    
    $AdminAccount=isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] :"";
    $AdminPassword=isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] :"";
    

    $TableName="RiskMonitor";
//    $SystemId="15";
//    $Id="0";
//    $Password="test";
//    $SubAccount="11";
//    $Name="test";
//    $Contact="test";
//    $State="1";
    
    //admin=frankzch&password=123456&tablename=RiskMonitor&state=1&编号=0&ID=11&密码=test&附属子账户=1&姓名=测试&联系方式=testcontact
    if($TableName && $State){
    $data="admin=".$AdminAccount."&password=".$AdminPassword."&tablename=".$TableName."&state=".$State."&编号=".$SystemId."&ID=".$Id."&密码=".$Password."&附属子账户=".$SubAccount."&姓名=".$Name."&联系方式=".$Contact;
      //  echo $data;
    }else{
        echo "Some data is missing!";
    
    }
    

    
    $testAccount = new RiskMonitor();
    if($data){
        
        $response=$testAccount->InsertData($data);
    
    }
    echo($response);
    
    ?>
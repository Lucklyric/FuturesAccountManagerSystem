
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
    
    $rawData=$testAccount->GetLogs();

    echo $rawData;
    
    //print_r($finalreturn);
    //echo "<br>";
    //echo "<br>";
    
    /*echo "<br><br>";
    
    $SettlementRawData=$SettlementAccount->GetAllData();
    echo $SettlementRawData;
    
    $obj=json_decode($SettlementRawData);
    
    foreach($obj->ColRowData as $colRawData){
        
        $NewRow = new SettlementAccountRow($colRawData[0],$colRawData[1],$colRawData[2],$colRawData[3],$colRawData[4],$colRawData[5],$colRawData[6],$colRawData[7],$colRawData[8],$colRawData[9],$colRawData[10],$colRawData[11]);
        $AllSettlementRows[$colRawData[0]]=$NewRow;
        
        echo "<br>";
    }
    
    foreach($AllSettlementRows as $OneRow){
        echo "<br>";
        echo $OneRow->GetAllData();
        echo "<br>";
        
    }
    
    echo "<br><br>";
    
    echo "<br>Delete: <br>";
    
    $userId="001";
    
    echo($testAccount->DeleteDataById($userId));
    
    echo "<br>Update: <br>";
    
    $jsonfile=$testAccount->GetAllData();
    
    echo($testAccount->UpdateDataById($userId,$jsonfile));
    
    echo "<br> Next is the array post to Xinyao<br>";
    
    $hardcode = array (
                       4,"CTP","中证模拟","模拟线路","000000073","123456",50000.00,
                       array(13,801,"123213",1,"1/13/2014","12/23/2111","","","中证模拟","app",""),
                       array(15,802,"123213",0,"7/13/1014","12/23/2111","","","证中模拟","mobile","")
                       );
    header("Content-type:text/html;charset=utf-8");*/
    $hardcode = array("data" => array(
                                      array("inf" => array("1", "CTP", "中证模拟", "模拟线路", "000000073", "123456", "50000.00"),
                                            "subs" => array(
                                                            array(13, 801, "123213", 1, "1/13/2014", "12/23/2111", "", "", "中证模拟", "app", ""),
                                                            array(15, 802, "123213", 0, "7/13/1014", "12/23/2111", "", "", "证中模拟", "mobile", "")
                                                            )
                                            ),
                                      array("inf" => array("3", "CTP", "中证模拟", "模拟线路", "000000073", "123456", "50000.00"),
                                            "subs" => array(
                                                            array(20, 801, "123213", 1, "1/13/2014", "12/23/2111", "", "", "中证模拟", "app", ""),
                                                            array(21, 802, "123213", 0, "7/13/1014", "12/23/2111", "", "", "证中模拟", "mobile", "")
                                                            )
                                            )));
//    print_r($hardcode);
    
    
    ?>
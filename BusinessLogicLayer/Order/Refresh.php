
<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    $path = "../../..";
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/Order/Order.php";

$AdminAccount=isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] :"";
$AdminPassword=isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] :"";
    
    $Order = new Order();
    
    //echo "<br>GetAllMainAccountData: <br>";
    
    $rawData=$Order->GetAllData($AdminAccount,$AdminPassword);
    
   // echo($rawData);
    
    //echo "<br>Split test:<br>";
    
    $obj=json_decode($rawData);
    
    //foreach($obj->ColColumnName as $colName){
    //    echo $colName." ";
    //}
    //echo "<br>test array:";
    
    $FinalCombine=array();
    
    if($obj){
    foreach($obj->ColRowData as $colRawData){
        $AllMoneyRow=array();
        //$NewRow = new SettlementAccountRow($colRawData[0],$colRawData[1],$colRawData[2],$colRawData[3],$colRawData[4],$colRawData[5],$colRawData[6],$colRawData[7],$colRawData[8],$colRawData[9],$colRawData[10],$colRawData[11]);
//        $AllSettlementRows[$colRawData[0]]=$NewRow;
        array_push($AllMoneyRow,$colRawData[1],$colRawData[2],$colRawData[3],$colRawData[4],$colRawData[5],$colRawData[6],$colRawData[7],$colRawData[8],$colRawData[9],$colRawData[10],$colRawData[11],$colRawData[12],$colRawData[13],$colRawData[14],$colRawData[15],$colRawData[16],$colRawData[17],$colRawData[18],$colRawData[19],$colRawData[20]);
     //   echo "<br>";
        array_push($FinalCombine,$AllMoneyRow);
        
    }
    }else{
    echo "Server in maitenance, cannot get MainRows.";
    }
    $finalreturn=array();
    $finalreturn["data"]=$FinalCombine;
    echo json_encode($finalreturn) ;
    
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

//    print_r($hardcode);
    
    
    ?>
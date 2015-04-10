
<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";

    include_once('HTTP/Request.php');
    //$next="abc";
    //return $next;
    $userid="frankzch";
    $password="123456";
    $data = array("userid"=>$userid,"password"=>$password,"tablename" => "MainAccount");
    $data_string = json_encode($data);
    $ch = curl_init('121.40.131.144/SPService/SPService.svc/LoadTableData');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                               'Content-Type: application/json',
                                               'Content-Length: ' . strlen($data_string)));
    
    $result = curl_exec($ch);
    curl_close($ch);
    header("Content-type:text/html;charset=utf-8");
    
    echo $result;

    ?>
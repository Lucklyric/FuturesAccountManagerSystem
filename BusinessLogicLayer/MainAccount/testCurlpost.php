
<?php
    
    //include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
    // utility functions
    //echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";

    include_once('HTTP/Request.php');
    //$next="abc";
    //return $next;
    $userid="frankzch";
    $password="123456";
      $data="admin=frankzch&password=123456&tablename=MainAccount&state=1&编号=0&通道=CTP&经纪公司名称=test期货&经纪公司服务器=上海电信&账户ID=999&账户密码=111&静态权益=90&最大可分配金额=2000";
   // $data = array("userid"=>$userid,"password"=>$password,"tablename" => "MainAccount");
   // $data_string = json_encode($data);
//    $ch = curl_init('121.40.131.144/SPService/SPService.svc/updatetablerowdata');
//    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//                                               'Content-Type: application/x-www-form-urlencoded',
//                                               'Content-Length: 214'));
//    
//    $result = curl_exec($ch);
//    curl_close($ch);
    
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL,'121.40.131.144/SPService/SPService.svc/updatetablerowdata');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
                $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
    
    
    // receive server response ...
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $server_output = curl_exec ($ch);
    
    curl_close ($ch);
    header("Content-type:text/html;charset=utf-8");
    
    echo $server_output;

    ?>
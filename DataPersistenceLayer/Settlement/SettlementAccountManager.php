<?php
$path = "../../..";
//echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/ConfigureFile.php";
    // base class with member properties and methods
    class SettlementAccountManager {
        
        var $userName;
        var $userType;
        
        function SettlementAccountManager($userName="guest", $userType="guest")
        {
            $this->userName = $userName;
            $this->userType = $userType;
        }
        
        function GetAllData($userid,$password)
        {
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
            $data = array("userid"=>$userid,"password"=>$password,"tablename" => "Settlement");
            $data_string = json_encode($data);
            $ch = curl_init($GLOBALS['serverAddress'].'SPService/SPService.svc/loadtabledata');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                                       'Content-Type: application/json',
                                                       'Content-Length: ' . strlen($data_string)));
            
            $result = curl_exec($ch);
            curl_close($ch);
            header("Content-type:text/html;charset=utf-8");
            
            return $result;
        }
        
        function UpdateData($data){
            
            include_once('HTTP/Request.php');
            
            //$data="tablename=MainTable&state=1&通道=CTP&经纪公司=海通期货&经纪公司服务器=上海电信&账户ID=888&账户密码=111";
            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_URL,$GLOBALS['serverAddress'].'SPService/SPService.svc/updatetablerowdata');
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
            

            
        }
        
        
        function InsertData($data){
            
            include_once('HTTP/Request.php');
            //$data=/$data=admin=frankzch&password=123456&tablename=Settlement&state=1&编号=0&子账户名称=810&静态权益=2000000.000&手续费=33.572&平仓盈亏=315.000&持仓盈亏=-170.000&占用保证金=7180.650&动态权益=1999481.428&风险度=0.004&结算日期=2015-04-13&结算时间=08:30:36&优先资金=1000000.000
            //echo $data;
           // echo"<br>";
            //$datanew="admin=frankzch&password=123456&tablename=MoneyInAndOut&state=1&编号=0&子账户名称=810&主账户编号=2&出入金=33.572&更新时间=2015-04-13 00:00:00&优先劣后=test&备注=test";
            //echo $datanew;
            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_URL,$GLOBALS['serverAddress'].'SPService/SPService.svc/updatetablerowdata');
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
            
            
        }
        
        
        function DeleteData($data)
        {
            include_once('HTTP/Request.php');
            //$data="tablename=MainTable&state=1&通道=CTP&经纪公司=海通期货&经纪公司服务器=上海电信&账户ID=888&账户密码=111";
            
            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_URL,$GLOBALS['serverAddress'].'SPService/SPService.svc/updatetablerowdata');
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
            
            
        }
        
        
        function GetSettlementAccountNo()
        {
            $hardcode=1;
            return $hardcode;
        }
        
    } // end of class Vegetable


    ?>
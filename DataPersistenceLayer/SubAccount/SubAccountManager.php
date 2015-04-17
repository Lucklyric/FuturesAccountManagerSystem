<?php
$path = "../../..";
//echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/ConfigureFile.php";
    // base class with member properties and methods
    class SubAccountManager {
        
        var $userName;
        var $userType;
        
        function SubAccountManager($userName="guest", $userType="guest")
        {
            $this->userName = $userName;
            $this->userType = $userType;
        }
        
        function GetAllData($userid,$password)
        {
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
            $data = array("userid"=>$userid,"password"=>$password,"tablename" => "SubAccount");
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
            //admin=frankzch&password=123456&tablename=SubAccount&state=1&编号=0&子账户ID=shw9794602&子账户密码=testpass&限制使用=False&创建时间=2015-4-10 17:19:22&最后登录时间=2015-4-10 17:19:23&用户姓名=test&联系方式=test&主账户编号=5&风控组名称=test&费率组名称=1&初始配资比例=1:2&二级主账户=False

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
        

        function GetMainAccountNo()
        {
            $hardcode=1;
            return $hardcode;
        }
        
    } // end of class Vegetable


    ?>
<?php
    
    // base class with member properties and methods
    class FeeSettingManager {
        
        var $userName;
        var $userType;
        
        function FeeSettingManager($userName="guest", $userType="guest")
        {
            $this->userName = $userName;
            $this->userType = $userType;
        }
        
        function GetAllData()
        {
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
            $data = array("tablename" => "feesetting");
            $data_string = json_encode($data);
            $ch = curl_init('121.40.131.144/Test/SPService/SPService.svc/loadtabledata');
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
   
        function GetCommissionFeeMultiplier()
        {
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
            $data = array("port" => "10083");
            $data_string = json_encode($data);
            $ch = curl_init('121.40.131.144/Test/SPService/SPService.svc/     GetCommissionFeeMultiplier');
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
        
        function GetMarginRateMultiplier()
        {
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
            $data = array("port" => "10083");
            $data_string = json_encode($data);
            $ch = curl_init('121.40.131.144/Test/SPService/SPService.svc/     GetMarginRateMultiplier');
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
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, '121.40.131.144/Test/SPService/SPService.svc/updatetablerowdata');
            curl_setopt($ch, CURLOPT_POST, 1);
            
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                                       'Content-Type: x-www-form-urlencoded',
                                                       'Content-Length: 129' ));
            
            $result = curl_exec($ch);
            
            curl_close($ch);
            header("Content-type:text/html;charset=utf-8");
            
            return strlen($result);
            
        }
        
        
        function InsertData($data){
            
            include_once('HTTP/Request.php');
            //$data="tablename=MainTable&state=1&通道=CTP&经纪公司=海通期货&经纪公司服务器=上海电信&账户ID=888&账户密码=111";
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, '121.40.131.144/Test/SPService/SPService.svc/updatetablerowdata');
            curl_setopt($ch, CURLOPT_POST, 1);
            
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                                       'Content-Type: x-www-form-urlencoded',
                                                       'Content-Length: 129' ));
            
            $result = curl_exec($ch);
            
            curl_close($ch);
            header("Content-type:text/html;charset=utf-8");
            
            return strlen($result);
            
        }
        
        
        function DeleteData($data)
        {
            include_once('HTTP/Request.php');
            //$data="tablename=MainTable&state=1&通道=CTP&经纪公司=海通期货&经纪公司服务器=上海电信&账户ID=888&账户密码=111";
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, '121.40.131.144/Test/SPService/SPService.svc/updatetablerowdata');
            curl_setopt($ch, CURLOPT_POST, 1);
            
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                                       'Content-Type: x-www-form-urlencoded',
                                                       'Content-Length: 129' ));
            
            $result = curl_exec($ch);
            
            curl_close($ch);
            header("Content-type:text/html;charset=utf-8");
            
            return strlen($result);
            
        }
        

        function GetMainAccountNo()
        {
            $hardcode=1;
            return $hardcode;
        }
        
    } // end of class Vegetable


    ?>
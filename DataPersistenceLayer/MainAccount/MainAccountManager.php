<?php
    
    // base class with member properties and methods
    class MainAccountManager {
        
        var $userName;
        var $userType;
        
        function MainAccountManager($userName="guest", $userType="guest")
        {
            $this->userName = $userName;
            $this->userType = $userType;
        }
        //拿主账户表里所有数据
        
        function GetAllData($userid,$password)
        {
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
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
            
            return $result;
        }
        
             
        function UpdateData($data){
            
            include_once('HTTP/Request.php');
            
            //$data="tablename=MainTable&state=1&通道=CTP&经纪公司=海通期货&经纪公司服务器=上海电信&账户ID=888&账户密码=111";
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, '121.40.131.144/SPService/SPService.svc/updatetablerowdata');
            curl_setopt($ch, CURLOPT_POST, 1);
            
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                                       'Content-Type: x-www-form-urlencoded',
                                                       'Content-Length: 129' ));
            
            $result = curl_exec($ch);
            
            curl_close($ch);
            header("Content-type:text/html;charset=utf-8");
            
            return $result;
            
        }
        
        
        function InsertData($data){
            
            include_once('HTTP/Request.php');
            //$data="tablename=MainTable&state=1&通道=CTP&经纪公司=海通期货&经纪公司服务器=上海电信&账户ID=888&账户密码=111";
            $data="AdminAccount=frankzch&AdminPassword=123456&TableName=MainAccount&RowState=1&编号=0&通道=CTP&经纪公司=游云模拟&经纪公司服务器=模拟线路&账户ID=00044&账户密码=3&静态权益=0.1";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, '121.40.131.144/SPService/SPService.svc/UpdateTableRowData');
            curl_setopt($ch, CURLOPT_POST, 1);
            
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                                       'Content-Type: application/json',
                                                       'Content-Length: 129' ));
            
            $result = curl_exec($ch);
            
            curl_close($ch);
            header("Content-type:text/html;charset=utf-8");
            return $result;
            
        }
        
        
        function DeleteData($data)
        {
            include_once('HTTP/Request.php');
            //$data="tablename=MainTable&state=1&通道=CTP&经纪公司=海通期货&经纪公司服务器=上海电信&账户ID=888&账户密码=111";
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, '121.40.131.144/SPService/SPService.svc/updatetablerowdata');
            curl_setopt($ch, CURLOPT_POST, 1);
            
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                                       'Content-Type: x-www-form-urlencoded',
                                                       'Content-Length: 129' ));
            
            $result = curl_exec($ch);
            
            curl_close($ch);
            header("Content-type:text/html;charset=utf-8");
            
            return $result;
            
        }
        
        

    } // end of class Vegetable


    ?>
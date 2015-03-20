<?php
    
    // base class with member properties and methods
    class ServerManager {
        
        var $userName;
        var $userType;
        
        function ServerManager($userName="guest", $userType="guest")
        {
            $this->userName = $userName;
            $this->userType = $userType;
        }
        
        //获取全部经纪公司信息，这个数据结构在主账户窗口会被使用到。
        function GetAllBrokersInfo(){
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
            $data = array("port" => "10083");
            $data_string = json_encode($data);
            $ch = curl_init('121.40.131.144/Test/SPService/SPService.svc/GetAllBrokersInfo');
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
        //获取服务器当前状态信息，eInitial - 0,eMainAccountConnected - 1,eStarted - 2,eStopped - 3。在整个页面醒目位置需要显示当前服务器的状态。
        
        function GetServerState(){
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
            $data = array("port" => "10083");
            $data_string = json_encode($data);
            $ch = curl_init('121.40.131.144/Test/SPService/SPService.svc/GetServerState');
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
        
        
        function GetLoggedInSubAccountCount(){
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
            $data = array("port" => "10083");
            $data_string = json_encode($data);
            $ch = curl_init('121.40.131.144/Test/SPService/SPService.svc/GetLoggedInSubAccountCount');
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
        
        
        

    } // end of class Vegetable


    ?>
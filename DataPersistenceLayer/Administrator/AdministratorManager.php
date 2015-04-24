<?php
$path = "../../..";
//echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/ConfigureFile.php";
    
    // base class with member properties and methods
    class AdministratorManager {
        
        var $userName;
        var $userType;
        
        function AdministratorManager($userName="guest", $userType="guest")
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
            $data = array("userid"=>$userid,"password"=>$password,"tablename" => "Admin");
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
            
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL,$GLOBALS['serverAddress'].'121.40.131.14SPService/SPService.svc/updatetablerowdata');
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

        
        

    } // end of class Vegetable


    ?>
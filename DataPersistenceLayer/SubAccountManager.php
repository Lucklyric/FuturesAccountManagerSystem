<?php
    
    // base class with member properties and methods
    class SubAccountManager {
        
        var $userName;
        var $userType;
        
        function SubAccountManager($userName="guest", $userType="guest")
        {
            $this->userName = $userName;
            $this->userType = $userType;
        }
        
        function GetAllData()
        {
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
            $data = array("tablename" => "SubAccount");
            $data_string = json_encode($data);
            $ch = curl_init('http://121.40.57.186/SPService/SPService.svc/loadtabledata');
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
        
        function GetMainAccountNo()
        {
            $hardcode=1;
            return $hardcode;
        }
        
    } // end of class Vegetable


    ?>
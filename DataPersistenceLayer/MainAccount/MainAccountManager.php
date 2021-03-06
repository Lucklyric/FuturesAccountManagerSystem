<?php
$path = "../../..";
//echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
include $path."/FuturesAccountManagerSystem/DataPersistenceLayer/ConfigureFile.php";
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


        function GetMainAccountConnectStatus($userid,$password,$mainAccountID)
        {
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
            $data = array("adminid"=>$userid,"adminpw"=>$password, "sMainAccountID"=>$mainAccountID);
            $data_string = json_encode($data);
            $ch = curl_init($GLOBALS['serverAddress'].'SPService/SPService.svc/GetMainAccountConnectStatus');
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

        function ConnectMainAccount($userid,$password,$mainAccountID)
        {
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
            $data = array("adminid"=>$userid,"adminpw"=>$password, "sMainAccountID"=>$mainAccountID);
            $data_string = json_encode($data);
            $ch = curl_init($GLOBALS['serverAddress'].'SPService/SPService.svc/ConnectMainAccount');
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

        function DisableOrEnableAccountFromWeb($userid,$password,$subAccountID,$enable,$source)
        {
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
            $data = array("userid"=>$userid,"password"=>$password, "sSubAccountUserID"=>$subAccountID,"sEnable"=>$enable,"source"=>$source);
            $data_string = json_encode($data);
            $ch = curl_init($GLOBALS['serverAddress'].'SPService/SPService.svc/DisableOrEnableAccountFromWeb');
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


        function GetNeedSyncOrders($userid,$password,$mainAccountID)
        {
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
            $data = array("adminid"=>$userid,"adminpw"=>$password, "sMainAccountID"=>$mainAccountID);
            $data_string = json_encode($data);
            $ch = curl_init($GLOBALS['serverAddress'].'SPService/SPService.svc/GetNeedSyncOrders');
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

        function GetNeedSyncPositions($userid,$password,$mainAccountID)
        {
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
            $data = array("adminid"=>$userid,"adminpw"=>$password, "sMainAccountID"=>$mainAccountID);
            $data_string = json_encode($data);
            $ch = curl_init($GLOBALS['serverAddress'].'SPService/SPService.svc/GetNeedSyncPosition');
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

        function OnRspSyncOrders($data){
            include_once('HTTP/Request.php');

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL,$GLOBALS['serverAddress'].'SPService/SPService.svc/OnRspSyncOrders');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,
                $data);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));


            // receive server response ...
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $server_output = curl_exec ($ch);

            curl_close ($ch);
            header("Content-type:text/html;charset=utf-8");

            return $server_output;
        }

        function OnRspSyncPosition($data){
            include_once('HTTP/Request.php');

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL,$GLOBALS['serverAddress'].'SPService/SPService.svc/OnRspSyncPosition');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,
                $data);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));


            // receive server response ...
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $server_output = curl_exec ($ch);

            curl_close ($ch);
            header("Content-type:text/html;charset=utf-8");

            return $server_output;
        }



        function GetAllData($userid,$password)
        {
            include_once('HTTP/Request.php');
            //$next="abc";
            //return $next;
            $data = array("adminid"=>$userid,"adminpw"=>$password,"tablename" => "MainAccount");
            $data_string = json_encode($data);
            $ch = curl_init($GLOBALS['serverAddress'].'SPService/SPService.svc/LoadTableData');
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
         //   echo $data;
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


        

    } // end of class Vegetable


    ?>
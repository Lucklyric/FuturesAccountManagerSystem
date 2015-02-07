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
        
        function GetAllData()
        {
            $hardcode="new test";
            return $hardcode;
        }
        
        function GetMainAccountNo()
        {
            $hardcode=1;
            return $hardcode;
        }
        
    } // end of class Vegetable


    ?>
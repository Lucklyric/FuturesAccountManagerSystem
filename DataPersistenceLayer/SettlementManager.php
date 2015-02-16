<?php
    
    // base class with member properties and methods
    class SettlementManager {
        
        var $userName;
        var $userType;
        
        function SettlementManager($userName="guest", $userType="guest")
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
<?php
    
    // base class with member properties and methods
    class MainAccountRow {
        
        var $MainId;
        var $Channel;
        var $CompanyName;
        var $CompanyServer;
        var $AccountId;
        var $AccountPassword;
        var $StaticEquity;
        
        
        
        
        
        function MainAccountRow($MainId="guest", $Channel="guest",$CompanyName="guest",$CompanyServer="guest",$AccountId="guest",$AccountPassword="guest",$StaticEquity="guest")
        {
            
            $this->MainId = $MainId;
            $this->Channel = $Channel;
            $this->CompanyName = $CompanyName;
            $this->CompanyServer = $CompanyServer;
            $this->AccountId = $AccountId;
            $this->AccountPassword = $AccountPassword;
            $this->StaticEquity = $StaticEquity;
        
        }
        
        function GetMainId()
        {
            return $this->MainId;
        }
        
        function GetChannel()
        {
            return $this->Channel;
        }
        
        function GetCompanyName()
        {
            return $this->CompanyName;
        }
        
        function GetCompanyServer()
        {
            return $this->CompanyServer;
        }
        
        function GetAccountId()
        {
            return $this->AccountId;
        }
        
        function GetAccountPassword()
        {
            return $this->AccountPassword;
        }
        
        function GetStaticEquity()
        {
            return $this->StaticEquity;
        }
        
        
        function GetAllData()
        {
            $result = $this->MainId." ".$this->Channel." ".$this->CompanyName." ".$this->CompanyServer." ".$this->AccountId." ".$this->AccountPassword." ".$this->StaticEquity;
            
            return $result;
        }
        
        function DeleteDataById($userId)
        {
            
            $next="Id:".$userId;
            
            return $next;
          
            
        }
        
        function UpdateDataById($userId, $dataJson)
        {
            
            $next="Id:".$userId;
            $return=$next.$dataJson;
            return $return;
            
            
        }
        
        function InsertData($dataJson)
        {
            
            $return=$dataJson;
            return $return;
            
            
        }
        
        function GetMainAccountNo()
        {
            $hardcode=1;
            return $hardcode;
        }
        
    } // end of class Vegetable


    ?>
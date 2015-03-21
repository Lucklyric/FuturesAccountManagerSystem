<?php
    
    // base class with member properties and methods
    class AdministratorRow {
        
        var $Id;
        var $Name;
        var $Password;
        var $SubMain;
        var $Restriction;
        var $UserName;
        var $Contact;
        
        
        
        
        
        function AdministratorRow($Id="guest", $Name="guest",$Password="guest",$SubMain="guest",$Restriction="guest",$UserName="guest",$Contact="guest")
        {
            
            $this->Id = $Id;
            $this->Name = $Name;
            $this->Password = $Password;
            $this->SubMain = $SubMain;
            $this->Restriction = $Restriction;
            $this->UserName = $UserName;
            $this->Contact = $Contact;
        
        }
        
        function GetId()
        {
            return $this->Id;
        }
        
        function GetName()
        {
            return $this->Name;
        }
        
        function GetPassword()
        {
            return $this->Password;
        }
        
        function GetSubMain()
        {
            return $this->SubMain;
        }
        
        function GetRestriction()
        {
            return $this->Restriction;
        }
        
        function GetUserName()
        {
            return $this->UserName;
        }
        
        function GetContact()
        {
            return $this->Contact;
        }
        
        
        function GetAllData()
        {
            $result=array();
            array_push($result,$this->Id,$this->Name,$this->Password,$this->SubMain,$this->Restriction,$this->UserName,$this->Contact);
            //$result = $this->MainId." ".$this->Channel." ".$this->CompanyName." ".$this->CompanyServer." ".$this->AccountId." ".$this->AccountPassword." ".$this->StaticEquity;

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
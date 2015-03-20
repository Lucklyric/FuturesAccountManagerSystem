<?php
    
    // base class with member properties and methods
    class RiskMonitorRow {
        
        var $SystemId;
        var $Id;
        var $Password;
        var $SubAccount;
        var $Name;
        var $Contact;
        
        
        function RiskMonitorRow($SystemId="test", $Id="test",$Password="test",$SubAccount="test",$Name="test",$Contact="test")
        {
            
            $this->SystemId = $SystemId;
            $this->Id = $Id;
            $this->Password = $Password;
            $this->SubAccount = $SubAccount;
            $this->Name = $Name;
            $this->Contact = $Contact;
      
   

        }
        function GetId ()
        {
            return $this->Id;
        }
        function GetSystemId()
        {
            return $this->SystemId;
        }
        
        function GetPassword()
        {
            return $this->Password;
        }
        
        function GetSubAccount()
        {
            return $this->SubAccount;
        }

        function GetName()
        {
            return $this->Name;
        }

        function GetContact()
        {
            return $this->Contact;
        }
        
        function GetAllData()
        {
            $result=array();
            array_push($result,$this->SystemId,$this->Id,$this->Password,$this->SubAccount,$this->Name,$this->Contact);
            //$result = $this->SubSystemId." ".$this->SubId." ".$this->SubPass." ".$this->Restriction." ".$this->CreateTime." ".$this->LastLoginTime." ".$this->UserName." ".$this->ContactInfo." ".$this->MainId." ".$this->RiskManagementGroup." ".$this->RateGroupName;

            return $result;
  
        }

        
    } // end of class Vegetable


    ?>
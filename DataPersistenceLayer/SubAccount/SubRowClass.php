<?php
    
    // base class with member properties and methods
    class SubAccountRow {
        
        var $SubSystemId;
        var $SubId;
        var $SubPass;
        var $Restriction;
        var $CreateTime;
        var $LastLoginTime;
        var $UserName;
        var $ContactInfo;
        var $MainId;
        var $RiskManagementGroup;
        var $RateGroupName;
        
        
        function SubAccountRow($SubSystemId="test", $SubId="test",$SubPass="test",$Restriction="test",$CreateTime="test",$LastLoginTime="test",$UserName="test",$ContactInfo="test",$MainId="test",$RiskManagementGroup="test",$RateGroupName="test")
        {
            
            $this->SubSystemId = $SubSystemId;
            $this->SubId = $SubId;
            $this->SubPass = $SubPass;
            $this->Restriction = $Restriction;
            $this->CreateTime = $CreateTime;
            $this->LastLoginTime = $LastLoginTime;
            $this->UserName = $UserName;
            $this->ContactInfo = $ContactInfo;
            $this->MainId = $MainId;
            $this->RiskManagementGroup = $RiskManagementGroup;
            $this->RateGroupName = $RateGroupName;
            
        
        }
        function GetUserName()
        {
            return $this->UserName;
        }
        function GetMainId()
        {
            return $this->MainId;
        }
        
        function GetContactInfo()
        {
            return $this->ContactInfo;
        }
        
        function GetRiskManagementGroup()
        {
            return $this->$RiskManagementGroup;
        }

        function GetRateGroupName()
        {
            return $this->RateGroupName;
        }

        function GetSubSystemId()
        {
            return $this->$SubSystemId;
        }
        
        function GetSubId()
        {
            return $this->SubId;
        }
        
        function GetSubPass()
        {
            return $this->SubPass;
        }
        
        function GetRestriction()
        {
            return $this->Restriction;
        }
        
        function GetCreateTime()
        {
            return $this->CreateTime;
        }
        
        function GetLastLoginTime()
        {
            return $this->LastLoginTime;
        }
        
        
        function GetAllData()
        {
            $result=array();
            array_push($result,$this->SubSystemId,$this->SubId,$this->SubPass,$this->Restriction,$this->CreateTime,$this->LastLoginTime,$this->UserName,$this->ContactInfo,$this->MainId,$this->RiskManagementGroup,$this->RateGroupName);
            //$result = $this->SubSystemId." ".$this->SubId." ".$this->SubPass." ".$this->Restriction." ".$this->CreateTime." ".$this->LastLoginTime." ".$this->UserName." ".$this->ContactInfo." ".$this->MainId." ".$this->RiskManagementGroup." ".$this->RateGroupName;

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
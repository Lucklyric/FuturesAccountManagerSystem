<?php
    
    // base class with member properties and methods
    class FeeSettingRowClass {
        
        var $Id;
        var $GroupName;
        var $Contract;
        var $OpenPositionFee;
        var $EqualPositionFee;
        var $EqualNowFee;
        var $FeeType;
        var $EnsurementsPercentage;
       
        
        
        function FeeSettingRowClass($Id="test", $GroupName="test",$Contract="test",$OpenPositionFee="test",$EqualPositionFee="test",$EqualNowFee="test",$FeeType="test",$EnsurementsPercentage="test")
        {
            
            $this->Id = $Id;
            $this->GroupName = $GroupName;
            $this->Contract = $Contract;
            $this->OpenPositionFee = $OpenPositionFee;
            $this->EqualPositionFee = $EqualPositionFee;
            $this->EqualNowFee = $EqualNowFee;
            $this->FeeType = $FeeType;
            $this->EnsurementsPercentage = $EnsurementsPercentage;
            
        
        }
        function GetId()
        {
            return $this->Id;
        }
        function GetGroupName()
        {
            return $this->GroupName;
        }
        
        function GetContract()
        {
            return $this->Contract;
        }
        
        function GetOpenPositionFee()
        {
            return $this->OpenPositionFee;
        }

        function GetEqualPositionFee()
        {
            return $this->EqualPositionFee;
        }

        function GetEqualNowFee()
        {
            return $this->EqualNowFee;
        }
        
        function GetFeeType()
        {
            return $this->FeeType;
        }
        
        function GetEnsurementsPercentage()
        {
            return $this->EnsurementsPercentage;
        }
        
        
        function GetAllData()
        {
            $result=array();
            array_push($result,$this->Id,$this->GroupName,$this->Contract,$this->OpenPositionFee,$this->EqualPositionFee,$this->EqualNowFee,$this->FeeType,$this->EnsurementsPercentage);
            //$result = $this->SubSystemId." ".$this->SubId." ".$this->SubPass." ".$this->Restriction." ".$this->CreateTime." ".$this->LastLoginTime." ".$this->UserName." ".$this->ContactInfo." ".$this->MainId." ".$this->RiskManagementGroup." ".$this->RateGroupName;

            return $result;
        }
        

        
    } // end of class Vegetable


    ?>
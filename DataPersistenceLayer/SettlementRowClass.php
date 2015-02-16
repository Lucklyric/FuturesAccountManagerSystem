<?php
    
    // base class with member properties and methods
    class SettlementAccountRow {
        
        var $SettlementId;
        var $SubAccountName;
        var $StaticEquity;
        var $Poundage;
        var $ProfitandLoss;
        var $PresentPandL;
        var $MarginPercentage;
        var $DynamicEquity;
        var $RiskPrediction;
        var $SettlementDate;
        var $SettlementTime;
        var $PriorityFunding;
        
        
        function SettlementAccountRow($SettlementId="test", $SubAccountName="test",$StaticEquity="test",$Poundage="test",$ProfitandLoss="test",$PresentPandL="test",$MarginPercentage="test",$DynamicEquity="test",$RiskPrediction="test",$SettlementDate="test",$SettlementTime="test",$PriorityFunding="test")
        {
            
            $this->SettlementId = $SettlementId;
            $this->SubAccountName =  $SubAccountName;
            $this->StaticEquity =  $StaticEquity;
            $this->Poundage =  $Poundage;
            $this->ProfitandLoss =  $ProfitandLoss;
            $this->PresentPandL =  $PresentPandL;
            $this->MarginPercentage =  $MarginPercentage;
            $this->DynamicEquity =  $DynamicEquity;
            $this->RiskPrediction =  $RiskPrediction;
            $this->SettlementDate =  $SettlementDate;
            $this->SettlementTime =  $SettlementTime;
            $this->PriorityFunding =  $PriorityFunding;
        }
        function GetDynamicEquity()
        {
            return $this->DynamicEquity;
        }
        
        function GetRiskPrediction()
        {
            return $this->RiskPrediction;
        }
        
        function GetSettlementDate()
        {
            return $this->SettlementDate;
        }
        
        function GetSettlementTime()
        {
            return $this->SettlementTime;
        }
        
        function GetPriorityFunding()
        {
            return $this->PriorityFunding;
        }
        
        function GetSettlementId()
        {
            return $this->SettlementId;
        }
        
        function GetSubAccountName()
        {
            return $this->SubAccountName;
        }
        
        function GetStaticEquity()
        {
            return $this->StaticEquity;
        }
        
        function GetPoundage()
        {
            return $this->Poundage;
        }
        
        function GetProfitandLoss()
        {
            return $this->ProfitandLoss;
        }
        
        function GetPresentPandL()
        {
            return $this->PresentPandL;
        }
        
        function GetMarginPercentage()
        {
            return $this->MarginPercentage;
        }
        
        
        function GetAllData()
        {
            $result = $this->SettlementId." ".$this->SubAccountName." ".$this->StaticEquity." ".$this->Poundage." ".$this->ProfitandLoss." ".$this->PresentPandL." ".$this->MarginPercentage." ".$this->DynamicEquity." ".$this->RiskPrediction." ".$this->SettlementDate." ".$this->SettlementTime." ".$this->PriorityFunding;

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
        
        function GetSettlementAccountNo()
        {
            $hardcode=1;
            return $hardcode;
        }
        
    } // end of class Vegetable


    ?>
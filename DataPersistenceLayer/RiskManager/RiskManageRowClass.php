<?php
    
    // base class with member properties and methods
    class RiskManageRow {
        
        var $Id;
        var $GroupName;
        var $TradePermitTime;
        var $OpenPositionForbiddenTime;
        var $SellSharesTime;
        var $RiskAlertLine;
        var $RiskAlertLog;
        var $RiskForbiddenLine;
        var $RiskForbiddenLog;
        var $EquityAlertLine;
        var $EquityBalanceLine;
        var $OvernightSellShareLine;
        var $OvernightSellShareDetail;
        var $DayLimitation;
        
        
        
        function RiskManageRow($Id="test", $GroupName="test",$TradePermitTime="test",$OpenPositionForbiddenTime="test",$SellSharesTime="test",$RiskAlertLine="test",$RiskAlertLog="test",$RiskForbiddenLine="test",$RiskForbiddenLog="test",$EquityAlertLine="test",$EquityBalanceLine="test",$OvernightSellShareLine="test",$OvernightSellShareDetail="test",$DayLimitation="test")
        {
            
            $this->Id = $Id;
            $this->GroupName = $GroupName;
            $this->TradePermitTime = $TradePermitTime;
            $this->OpenPositionForbiddenTime = $OpenPositionForbiddenTime;
            $this->SellSharesTime = $SellSharesTime;
            $this->RiskAlertLine = $RiskAlertLine;
            $this->RiskAlertLog = $RiskAlertLog;
            $this->RiskForbiddenLine = $RiskForbiddenLine;
            $this->RiskForbiddenLog = $RiskForbiddenLog;
            $this->EquityAlertLine = $EquityAlertLine;
            $this->EquityBalanceLine = $EquityBalanceLine;
            $this->OvernightSellShareLine = $OvernightSellShareLine;
            $this->OvernightSellShareDetail = $OvernightSellShareDetail;
            $this->DayLimitation = $DayLimitation;
            
   

        }
        function GetId ()
        {
            return $this->Id;
        }
        function GetGroupName()
        {
            return $this->GroupName;
        }
        
        function GetTradePermitTime()
        {
            return $this->TradePermitTime;
        }
        
        function GetOpenPositionForbiddenTime()
        {
            return $this->OpenPositionForbiddenTime;
        }

        function GetSellSharesTime()
        {
            return $this->SellSharesTime;
        }

        function GetRiskAlertLine()
        {
            return $this->RiskAlertLine;
        }
        
        function GetRiskAlertLog()
        {
            return $this->RiskAlertLog;
        }
        
        function GetRiskForbiddenLine()
        {
            return $this->RiskForbiddenLine;
        }
        
        function GetRiskForbiddenLog()
        {
            return $this->RiskForbiddenLog;
        }
        
        function GetEquityAlertLine()
        {
            return $this->EquityAlertLine;
        }
        
        function GetEquityBalanceLine()
        {
            return $this->EquityBalanceLine;
        }
        
        function GetOvernightSellShareLine()
        {
            return $this->OvernightSellShareLine;
        }
        
        function GetOvernightSellShareDetail()
        {
            return $this->OvernightSellShareDetail;
        }
        function GetDayLimitation()
        {
            return $this->DayLimitation;
        }
        
        function GetAllData()
        {
            $result=array();
            array_push($result,$this->Id,$this->GroupName,$this->TradePermitTime,$this->OpenPositionForbiddenTime,$this->SellSharesTime,$this->RiskAlertLine,$this->RiskAlertLog,$this->RiskForbiddenLine,$this->RiskForbiddenLog,$this->EquityAlertLine,$this->EquityBalanceLine,$this->OvernightSellShareLine,$this->OvernightSellShareDetail,$this->DayLimitation);
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
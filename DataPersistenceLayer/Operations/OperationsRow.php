<?php
    
    // base class with member properties and methods
    class OperationsRow {
        
        var $Id;
        var $Functions;
        var $Operator;
        var $OperationTime;
        var $OperationType;
        var $OperationObject;
        var $OperationDetail;
        var $Judge;
        var $JudgementResult;
        var $JudgementTime;
        
        
        
        
        
        function OperationsRow($Id="guest", $Functions="guest",$Operator="guest",$OperationTime="guest",$OperationType="guest",$OperationObject="guest",$OperationDetail="guest",$Judge="guest",$JudgementResult="guest",$JudgementTime="guest")
        {
            
            $this->Id = $Id;
            $this->Functions = $Functions;
            $this->Operator = $Operator;
            $this->OperationTime = $OperationTime;
            $this->OperationType = $OperationType;
            $this->OperationObject = $OperationObject;
            $this->OperationDetail = $OperationDetail;
            $this->Judge = $Judge;
            $this->JudgementResult = $JudgementResult;
            $this->JudgementTime = $JudgementTime;
            
            
            
        }
        
        function GetId()
        {
            return $this->Id;
        }
        
        function GetFunctions()
        {
            return $this->Functions;
        }
        
        function GetOperator()
        {
            return $this->Operator;
        }
        
        function GetOperationTime()
        {
            return $this->OperationTime;
        }
        
        function GetOperationType()
        {
            return $this->OperationType;
        }
        
        function GetOperationObject()
        {
            return $this->OperationObject;
        }
        
        function GetOperationDetail()
        {
            return $this->OperationDetail;
        }
        
        function GetJudgementTime()
        {
            return $this->JudgementTime;
        }
        function GetJudgementResult()
        {
            return $this->JudgementResult;
        }
        function GetJudge()
        {
            return $this->Judge;
        }
        
        
        function GetAllData()
        {
            $result=array();
            array_push($result,$this->Id,$this->Functions,$this->Operator,$this->OperationTime,$this->OperationType,$this->OperationObject,$this->OperationDetail,$this->Judge,$this->JudgementResult,$this->JudgementTime);
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
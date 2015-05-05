<?php

//include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
// utility functions
$path = "../../..";
//echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";

include $path . "/FuturesAccountManagerSystem/DataPersistenceLayer/FeeSetting/FeeSettingManager.php";
include $path . "/FuturesAccountManagerSystem/DataPersistenceLayer/FeeSetting/FeeSettingRowClass.php";

function print_vars($obj)
{
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t$prop = $val\n";
    }
}

function print_methods($obj)
{
    $arr = get_class_methods(get_class($obj));
    foreach ($arr as $method) {
        echo "\tfunction $method()\n";
    }
}

function class_parentage($obj, $class)
{
    if (is_subclass_of($GLOBALS[$obj], $class)) {
        echo "Object $obj belongs to class " . get_class($GLOBALS[$obj]);
        echo " a subclass of $class\n";
    } else {
        echo "Object $obj does not belong to a subclass of $class\n";
    }
}

$AdminAccount=isset($_GET["AdminAccount"]) ? $_GET["AdminAccount"] :"";
$AdminPassword=isset($_GET["AdminPassword"]) ? $_GET["AdminPassword"] :"";

$FeeSettingManager = new FeeSettingManager();

//echo "<br>GetAllMainAccountData: <br>";

$commission = $FeeSettingManager->GetCommissionFeeMultiplier($AdminAccount, $AdminPassword);
$margin = $FeeSettingManager->GetMarginRateMultiplier($AdminAccount, $AdminPassword);

$data = json_encode(array('Commission' => $commission, 'Margin' => $margin ));

echo $data;

?>
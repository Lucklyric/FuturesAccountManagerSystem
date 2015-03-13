<?php
//header("Content-type:text/html;charset=utf-8");
//include "_SERVER['DOCUMENT_ROOT']/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
// utility functions
//$path = $_SERVER['DOCUMENT_ROOT'];
//echo $path."/FuturesAccountManagerSystem/DataPersistenceLayer/MainAccountManager.php";
// include "../DataPersistenceLayer/MainAccountManager.php";
//echo "\n";
//tablename=MainAccount&state=1&通道=CTP&经纪公司名称=测试&经纪公司服务器=测试&账户ID=990&密码=110
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


//$testAccount = new MainAccountManager();

//\echo "FuturesAccountManager: CLASS " . get_class($testAccount) . "\n";

//echo "\nFuturesAccountManager: Properties\n";

//print_vars($testAccount);

//echo "\nFuturesAccountManager: Methods\n";

//print_methods($testAccount);

//echo($testAccount->GetAllData());

//echo "\n Next is the array post to Xinyao\n";


//    // $hardcode = array (
//                         "Info"=>array(4,"CTP","中证模拟","模拟线路","000000073","123456",50000.00),"subs"=>array(
//                        array(13,801,"123213",1,"1/13/2014","12/23/2111","","","中证模拟","app",""),
//                        array(15,802,"123213",0,"7/13/1014","12/23/2111","","","证中模拟","mobile",""))
//                      );

$hardcode = array("data" => array(
    array("inf" => array("1", "CTP", "中证模拟", "模拟线路", "000000073", "123456", "50000.00"),
        "subs" => array(
            array(13, 801, "123213", 1, "1/13/2014", "12/23/2111", "", "", "中证模拟", "app", ""),
            array(15, 802, "123213", 0, "7/13/1014", "12/23/2111", "", "", "证中模拟", "mobile", "")
        )
    ),
    array("inf" => array("2", "CTP", "中证模拟", "模拟线路", "000000073", "123456", "50000.00"),
        "subs" => array(
            array(16, 801, "123213", 1, "1/13/2014", "12/23/2111", "", "", "中证模拟", "app", ""),
            array(17, 802, "123213", 0, "7/13/1014", "12/23/2111", "", "", "证中模拟", "mobile", "")
        )
    ),
    array("inf" => array("3", "CTP", "中证模拟", "模拟线路", "000000073", "123456", "50000.00"),
        "subs" => array(
            array(18, 801, "123213", 1, "1/13/2014", "12/23/2111", "", "", "中证模拟", "app", ""),
            array(19, 802, "123213", 0, "7/13/1014", "12/23/2111", "", "", "证中模拟", "mobile", "")
        )
    ),
    array("inf" => array("3", "CTP", "中证模拟", "模拟线路", "000000073", "123456", "50000.00"),
        "subs" => array(
            array(20, 801, "123213", 1, "1/13/2014", "12/23/2111", "", "", "中证模拟", "app", ""),
            array(21, 802, "123213", 0, "7/13/1014", "12/23/2111", "", "", "证中模拟", "mobile", "")
        )
    ),
    array("inf" => array("3", "CTP", "中证模拟", "模拟线路", "000000073", "123456", "50000.00"),
        "subs" => array(
            array(22, 801, "123213", 1, "1/13/2014", "12/23/2111", "", "", "中证模拟", "app", ""),
            array(23, 802, "123213", 0, "7/13/1014", "12/23/2111", "", "", "证中模拟", "mobile", "")
        )
    ),
    array("inf" => array("3", "CTP", "中证模拟", "模拟线路", "000000073", "123456", "50000.00"),
        "subs" => array(
            array(24, 801, "123213", 1, "1/13/2014", "12/23/2111", "", "", "中证模拟", "app", ""),
            array(25, 802, "123213", 0, "7/13/1014", "12/23/2111", "", "", "证中模拟", "mobile", "")
        )
    ),
    array("inf" => array("3", "CTP", "中证模拟", "模拟线路", "000000073", "123456", "50000.00"),
        "subs" => array(
            array(26, 801, "123213", 1, "1/13/2014", "12/23/2111", "", "", "中证模拟", "app", ""),
            array(27, 802, "123213", 0, "7/13/1014", "12/23/2111", "", "", "证中模拟", "mobile", "")
        )
    ),
));

echo json_encode($hardcode);


?>
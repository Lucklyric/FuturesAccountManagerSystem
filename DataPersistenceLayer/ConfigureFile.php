<?php
/**
 * Created by IntelliJ IDEA.
 * User: Alvin
 * Date: 2015-04-16
 * Time: 9:57 PM
 */
$ifLocalTest = true;
if ($ifLocalTest){
    $serverAddress = "121.40.131.144/";
}else{
    $serverAddress =  $_SERVER['SERVER_NAME'] . "/";
}

//$serverAddress = "121.40.17.226:10001/";
<?php
session_start();


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "123456";
$dbname = "webshop";

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$GLOBALS['con'];

if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
}


define("BASEURL","http://localhost:8080/webdev-base-webshop/");
define("BASEURL_CMS","http://localhost:8080/webdev-base-webshop/admin/");

function prettyDump ( $var ) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}
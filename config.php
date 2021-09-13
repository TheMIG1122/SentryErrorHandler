<?php
require_once(__DIR__ . '/vendor/autoload.php');
Sentry\init(['dsn' => 'https://da8504ce798d49b1859f683081909158@o996156.ingest.sentry.io/5954937' ]);
ini_set("display_errors",0);
// ini_set("log_errors",1);


// Server Error
// throw new Exception("My first Sentry error!");
// get();
// Warning
// echo $de;

// DB

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
// $conn= mysqli_connect($servername,$username,$password,$dbname);

// $array = array(1,2,4,5,6,6);

// for ($i=0;$i<8;$i++) {
//     echo $array[$i];
// }


// File
// include 'data.php';


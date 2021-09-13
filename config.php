<?php
require_once(__DIR__ . '/vendor/autoload.php');
Sentry\init(['dsn' => 'https://da8504ce798d49b1859f683081909158@o996156.ingest.sentry.io/5954937' ]);
ini_set("display_errors",0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vitaleducators";

// Create connection
$connection = mysqli_connect($servername,$username,$password,$dbname);

require 'functions.php';

if(!$connection) {
    redirect('error.php?error=DataBase&msg=Server is not connected to Database');
}
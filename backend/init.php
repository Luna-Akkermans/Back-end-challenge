<?php 

//Start session
session_start();

$_SESSION['used_id'] = 1;

//Database logic
$db = new PDO('mysql:dbname=todo;host=localhost', 'root', 'mysql');

//User logged in check.
if(!isset($_SESSION['user_id'])) {
    die('Not signed in.');
    
}
<?php
require '../vendor/autoload.php';
require 'include/db.php';
use Josantonius\Session\Session;


$db = Database::getConnection();
$session = new Session();
if($session->get('username')){
    header("Location: templates/home.php");
}else{
    header("Location: templates/dealer_login.php");
}
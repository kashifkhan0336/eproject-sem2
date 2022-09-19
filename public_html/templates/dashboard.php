<?php
require '../../vendor/autoload.php';
require '../include/db.php';

use Josantonius\Session\Session;


$db = Database::getConnection();
$session = new Session();
$session->start([
    'cookie_httponly' => true,
]);

if(empty($session->get('username'))){
    header("Location: dealer_login.php");
}


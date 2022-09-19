<?php
require '../../vendor/autoload.php';
require '../include/db.php';

use Josantonius\Session\Session;


$db = Database::getConnection();
$session = new Session();
$session->start([
    'cookie_httponly' => true,
]);
if(isset($_POST['email_value']) && isset($_POST['password_value'])) {
    if ($session->isStarted()) {
        $session->set("username", "admin");
        echo $session->get("username");
    }else{
        echo "Session not started!";
    }
}else{
    echo "Values not set!";
}
?>
<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>>
    <label>
        <input type="text" name="email_value">
    </label>
    <label>
        <input type="password" name="password_value">
    </label>
    <input type="submit">
</form>
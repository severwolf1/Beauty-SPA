<?php
session_start();
session_destroy();
setcookie();
header('Location: /index.php ');
exit();


?>
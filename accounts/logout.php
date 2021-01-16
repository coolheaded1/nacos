<?php
session_start();
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);
$msg = "You are login Out";
header('Location:'.$urlServer.'register.php');
?>
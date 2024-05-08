<?php 
setcookie("useradmin", "", time() - 3600,'/');
header('Location: loginadmin.php');
?>
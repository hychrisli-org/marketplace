<?php
unset($_COOKIE['USER']);
setcookie('USER', '', time() - 3600, '/');
header("Location: index.php");
die();
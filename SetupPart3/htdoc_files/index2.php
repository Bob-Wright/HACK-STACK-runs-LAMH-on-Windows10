<?php
// Start session
session_name("ComicBuilder");
include("/opt/hhvm-3.30.12-5/apache2/session2DB/Zebra.php");
echo defined('HHVM_VERSION') ? 'Great! You are Using HHVM' : 'Sorry! Not using HHVM';
phpinfo();
?>


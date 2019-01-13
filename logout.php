<?php
session_start();
session_unset();
session_destroy();
echo "THANK YOU FOR USING NMT......Please wait a moment and you will be redirected";
header ('refresh: 1, URL="login.html"');
?>

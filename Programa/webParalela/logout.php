<?php
session_start();
session_destroy();
//echo "asd";
header('Location: index.php');
?>
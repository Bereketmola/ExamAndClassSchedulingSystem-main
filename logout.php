<?php
session_start();
if(!isset($_SESSSTION['user_name'])&&!isset($_SESSSTION['password']))
{
$_SESSION=array();
session_destroy();
}
header('location:index.php');
?>
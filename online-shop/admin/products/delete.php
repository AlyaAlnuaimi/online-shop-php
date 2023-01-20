<?php
define('BASE_PATH', '../../');
require_once('../../logic/authentication.php');
protectAdmin();
require_once('../../logic/products.php');
if (isset($_REQUEST['id']) && $_REQUEST['id'])
// function from --> logic/products.php 
  deleteProduct($_REQUEST['id']);
  //redirect to the main page 
header('Location:index.php');
die();
?>
<?php
error_reporting(-1);
ini_set("display_errors", 1);
require('config.php');
if (isset($_GET['lang']))
{
echo "<br/>" . $_GET['lang'] . "<br/>"
}
?>
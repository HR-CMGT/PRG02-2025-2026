<?php
// Gegevens voor de connectie
$host       = '127.0.0.1';
$username   = 'root';
$password   = '';
$database   = 'planning_system';

$db = mysqli_connect($host, $username, $password, $database)
    or die('Error: '.mysqli_connect_error());
?>

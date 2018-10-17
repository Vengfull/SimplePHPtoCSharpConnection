<?php
$servername = 'localhost';
$username = 'test';
$password = 'test';
$database = 'test';

try { $conn = new mysqli($servername, $username, $password, $database); } catch(mysqli_sql_exception $e) { throw $e;}
?>
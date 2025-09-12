<?php

$host = "localhost";
$user = "root";
$pass = "12345";
$db = "sonar";

$conn = new mysqli($host, $user, $pass, $db);

if(!$conn){
    die("error");
}

echo "conectou";
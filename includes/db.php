<?php

$server = "sql206.epizy.com";
$username = "epiz_31138594";
$password = "7tGiv20pgx";
$dbname = "epiz_31138594_phpcalculator";


$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    
    die ("connection error" .mysqli_connect_error());

}

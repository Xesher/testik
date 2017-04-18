<?php
$connection=PDO("mysql:host=localhost;dbname=test_db", 'root', 'Ktjy95dbnz')
//$connection= mysqli_connect("localhost","root","Ktjy95dbnz","test_db");
if ($connection==false){
    echo"Не удалось подключится к БД";
    echo mysqli_connect_error();
    exit();
};
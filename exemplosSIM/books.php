<?php
$db = new mysqli('localhost',root,);
$db->set_charset('utf8mb4');
$dbname = "news";
$sql = "CREATE DATABASE ".$dbname;
if($db->query($sql)){
    echo "Base de dados criada com sucesso";
} $db->close();
?><?php

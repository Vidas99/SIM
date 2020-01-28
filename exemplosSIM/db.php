<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "basededados";
$db = new mysqli($host,$username,$passwd,$dbname);
$db->set_charset('utf8mb4');
if ($db->connect_error){ // Verifica a ligação
die("Erro: ".$db->connect_error);
}else{
echo "Ligação aberta";
}
?><?php

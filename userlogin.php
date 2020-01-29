<?php
include('init.php');
if((isset($_SESSION['login_autenticated'])) && ($_SESSION['login_autenticated'] == true)){
echo "Utilizador: ".$_SESSION['login_user']." autenticado.<br />";
echo "Terminar Sessão? <a href='?logout=true'>SAIR</a>";
}
else
{
?>
<form action="" method="post">
Utilizador: <input id="name" name="username" type="text"><br/>
Password: <input id="password" name="password" type="password"><br/>
<input name="submit" type="submit" value=" Login ">
<?php echo $error; ?>
</form>
<?php
}
?>


include("db.php");
session_start();
if((isset($_GET['logout'])) && ($_GET['logout'] == true)){
session_destroy();
header("location: sessoes.php");
}
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username ou Password inválido.";
}
else{
$username=$_POST['username'];
$password=$_POST['password'];
$username = stripslashes($username);
$password = stripslashes($password);
$username = $db>real_escape_string($username);
$password = md5($db>real_escape_string($password));
$query = $db>query("select * from utilizadores where password='$password' AND username='$username'");
$rows = $query->num_rows;
if ($rows == 1) {
$_SESSION['login_user'] = $username;
$_SESSION['login_autenticated'] = true;
header("location: sessoes.php");
} else {
$error = "Username ou Password inválido.";
}
mysqli_close($db);
}
}

<?php

require_once("conexao.php");
session_start();

if(isset($_GET['logout']) && $_GET['logout'] == 1){
    $_SESSION = array();
    session_destroy();
    header('Location: /');
}

$_SESSION['logged'] = $_SESSION['logged'] ?? false;

$email = $_POST['txt_email'] ?? NULL;
$password = $_POST['txt_password'] ?? NULL;

$sql = "SELECT *FROM tb_user WHERE email = '$email' and passwords = '$password'";
$sql_login=mysqli_query($conection, $sql);
$sql_dois = "SELECT nome FROM tb_user WHERE email = '$email' and passwords = '$password'";
$sql_nome=mysqli_query($conection, $sql_dois);



if(mysqli_num_rows($sql_login)!=0){

    $_SESSION['nome'] = $lista[0];
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['logged'] = true;
    header('location:../index.php');

}



 
?>
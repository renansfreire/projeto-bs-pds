<?php

require_once("conexao.php");

$email = $_POST['txt_email'];
$password = $_POST['txt_password'];

$sql = "SELECT *FROM tb_user WHERE email = '$email' and passwords = '$password'";
$sql_login=mysqli_query($conection, $sql);

if(mysqli_num_rows($sql_login)!=0){

    header('location:../index.html');

} else{

    echo " <script>

    alert('Usuário não registrado.');
    
    window.location.href = '../login.html';
    
    </script>";
}

?>
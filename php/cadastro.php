<?php

require_once("conexao.php");

$email = $_POST['txt_email'];
$name = $_POST['txt_name'];
$lastname = $_POST['txt_lastname'];
$cpf = $_POST['txt_cpf'];
$password = $_POST['txt_password'];

$sql = "INSERT INTO tb_user (nome, last_name, cpf, email, passwords) VALUES ('$name', '$lastname', '$cpf', '$email', '$password')";
$sql_cadastro=mysqli_query($conection, $sql);



if($sql_cadastro == true){

    echo " <script>

    alert('Cadastro do usuário efetuado com sucesso!');
    window.location.href = '../login.html';
    
    </script>";

} else{

    echo " <script>

    alert('Falha ao cadastrar.');
    
    window.location.href = '../register.html';
    
    </script>";

}


?>
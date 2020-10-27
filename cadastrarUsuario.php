<?php 

include_once 'db/conexao.php';


$nome = $_POST['name'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = $_POST['pass'];

$insere = "INSERT INTO curso (user_name, user_email, user_cpf, user_pass) VALUES ($nome, $email, $cpf, $senha)";

if (mysqli_query($con, $insere)) {

    echo "<script> alert('Criado com sucesso!')</script>";
    echo "<script> window.location.href='home.php'</script>";
} else {
    echo "Error: " . $insere . "<br>" . mysqli_error($con);

}

mysqli_close($con);



?>
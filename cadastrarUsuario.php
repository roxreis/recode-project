<?php 

include_once 'db/conexao.php';


if (isset($_POST['cadastrar'])) {
        
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $fileName = $_FILES['img']['name'];
    $linkTemp = $_FILES['img']['tmp_name'];
    $localSave = "img/$fileName";
    move_uploaded_file($linkTemp, $localSave);
    
    $senhaSegura = password_hash($_POST['pass'], PASSWORD_BCRYPT);

 
    $inserir = "INSERT INTO usuarios (user_name, user_email, user_cpf, user_pass, user_img) VALUES ('$nome', '$email', '$cpf', '$senhaSegura', '$localSave')";


    if (mysqli_query($con, $inserir)) {
        echo "<script> alert('Criado com sucesso!')</script>";
        echo "<script> window.location.href='home.php'</script>";

    } else {

        printf("Errormessage: %s\n", mysqli_error($con) ); 
    
    }
}

mysqli_close($con);


?>
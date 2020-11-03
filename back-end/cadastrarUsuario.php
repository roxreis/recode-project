<?php 

include_once 'db/conexao.php';


if (isset($_POST['cadastrar'])) {
        
    $nome = $_POST['first_name'];
    $sobrenome = $_POST['last_name'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $nivelAcesso = $_POST['nivel'];
    // $_POST['locador'] == 1 ? $locador = $_POST['locador'] : $locador = NULL;
    // $_POST['locatario'] == 1 ? $locatario = $_POST['locatario'] : $locatario = NULL;
    $locatario = $_POST['locatario']; 
    $locador = $_POST['locador']; 
    $regiao = $_POST['regiao'];
    $descricaoImovel = $_POST['descricao_imovel'];
    
    $fileName = $_FILES['img']['name'];
    $linkTemp = $_FILES['img']['tmp_name'];
    $_FILES['img']['name'] != " " ? $localSaveFoto = "moradaMais/img/clienteImagens/fotoCliente/$fileName" : $localSaveFoto = NULL;
    move_uploaded_file($linkTemp, $localSaveFoto);
    
    $fileNameCasa1 = $_FILES['imgCasa1']['name'];
    $linkTempCasa1 = $_FILES['imgCasa1']['tmp_name'];
    $localSaveCasa1 = "moradaMais/img/clienteImagens/fotosCasa/$fileNameCasa1";
    $fileNameCasa2 = $_FILES['imgCasa2']['name'];
    $linkTempCasa2 = $_FILES['imgCasa2']['tmp_name'];
    $localSaveCasa2 = "moradaMais/img/clienteImagens/fotosCasa/$fileNameCasa2";

    move_uploaded_file($linkTempCasa1, $localSaveCasa1);
    move_uploaded_file($linkTempCasa2, $localSaveCasa2);
    
    $senhaSegura = SHA1($_POST['pass']);

 
    $inserir = "INSERT INTO usuarios (first_name, last_name, user_email, user_cpf, user_pass, user_img, user_nivel, user_ativo, check_locador,check_locatario, regiao, descricao_imovel, imgCasa1, imgCasa2 ) VALUES ('$nome', '$sobrenome', '$email', '$cpf', '$senhaSegura', '$localSaveFoto', '$nivelAcesso', 1, '$locador', '$locatario','$regiao','$descricaoImovel','$localSaveCasa1','$localSaveCasa2' )";


    if (mysqli_query($con, $inserir)) {
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";
        echo "<script> window.location.href='/moradaMais/form-login.php'</script>";

    } else {

        printf("Errormessage: %s\n", mysqli_error($con) ); 
    
    }
}

mysqli_close($con);


?>
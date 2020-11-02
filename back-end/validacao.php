<?php

 include_once "db/conexao.php";

  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: /moradaMais/home.php"); 
      exit;
  }


  $usuario = ($_POST['usuario']);
  $senha =($_POST['senha']);

  // Validação do usuário/senha digitados
  $sql = "SELECT `user_id`, `user_name`, `user_nivel` FROM `usuarios` WHERE (`user_name` = '".$usuario ."') AND (`user_pass` = '". sha1($senha) ."') AND (`user_ativo` = 1) LIMIT 1";
  $query = $con->query($sql);

  if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
        // Salva os dados encontados na variável $resultado
        $resultado = mysqli_fetch_assoc($query);
            // A sessão precisa ser iniciada em cada página diferente
       if (!isset($_SESSION)) session_start();

            // Salva os dados encontrados na sessão
        $_SESSION['UsuarioID'] = $resultado['user_id'];
        $_SESSION['UsuarioNome'] = $resultado['user_name'];
        $_SESSION['UsuarioNivel'] = $resultado['user_nivel'];

        $nivel_necessario = 2;
        // Verifica se não há a variável da sessão que identifica o usuário
        if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {

            // Redireciona o visitante de volta pro login
            header("Location: /moradaMais/home.php"); exit;

    } else {

        // Redireciona o visitante
        header("Location: /moradaMais/pagina-adm.php"); exit;
    }


  }

 









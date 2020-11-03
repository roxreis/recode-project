<?php 

  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['UsuarioID'])) {
//       // Destrói a sessão por segurança
      session_destroy();
//       // Redireciona o visitante de volta pro login

  }


// ?>




<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">          
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/partials/header.css">
    <link rel="stylesheet" href="styles/partials/adm.css">
    <link rel="stylesheet" href="styles/partials/form-user.css">
    <link rel="stylesheet" href="styles/partials/forms.css">
    <link rel="stylesheet" href="styles/partials/home.css">
    <link rel="stylesheet" href="styles/partials/footer.css">
    <link rel="stylesheet" href="styles/partials/form-login.css">
    <link rel="stylesheet" href="styles/partials/form-cadastro.css">


    <title>Moradia+ | conquiste algo importante</title>
</head>

<body>

    <header id="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
            <a class="navbar-brand" href="/moradaMais/home.php">
                <img src="img/logo/logo-morada-mais.jpeg" alt="logo moradia+">
            </a>
        <div class="collapse navbar-collapse menu" id="navbarNav">
            
        <?php if(isset($_SESSION['UsuarioID'])):?>
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="#">QUEM SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="form-login.php">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="form-cadastro.php">CADASTRO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTATO</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nome-usuario" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= "Olá, ".$_SESSION['UsuarioNome'];?>
                    </a>
                    <div class="dropdown-menu div-sair" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item nome-usuario-sair" href="back-end/logout.php">Sair</a>
                    </div>
                 </li>
            </ul>
        <?php else: ?>
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="#">QUEM SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="form-login.php">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="form-cadastro.php">CADASTRO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTATO</a>
                </li>
            </ul>
        <?php endif; ?>
        </div>
    </nav>
</header>

 
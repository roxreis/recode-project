<?php 

include_once "db/conexao.php";


$sel = "SELECT * FROM usuarios";
$result = $con->query($sel);




?>


<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">          
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/partials/header.css">
    <link rel="stylesheet" href="css/partials/adm.css">
    <script src="/scripts/addField.js" defer></script>

    <title>Matchy | conquiste algo importante</title>
</head>
<body id="page-adm">
    <div id="container">
        <header class="page-header">
            <div class="header-content"> 
                <h1>Administrador</h1>
            </div>   
        </header>

        <section>
            <aside>
                <h2>FILTROS</h2><hr>
                <ul></ul>
                
            </aside>
            <main>

                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Foto</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php while ($usuario = $result->fetch_array()) { ?>
                        <tr> 
                            <th scope="row"><?= $usuario['id_user']; ?></th>
                            <td><?= $usuario['user_name']; ?></td>
                            <td><?= $usuario['user_email']; ?></td>
                            <td> <img class="m-1"style="width:50px; height:40px"src="<?= $usuario['user_img'];?>" alt=""></td>
                        </tr>
                    <?php } ?>    
                    </tbody>
                </table

                <footer>

                </footer>
            
            </main>
        </section>
    </div>
</body>
</html>
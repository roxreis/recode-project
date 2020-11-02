<?php 

    include_once ('back-end/db/conexao.php');
    include_once('includes/header.php');

    $sel = "SELECT * FROM usuarios";
    $result = $con->query($sel);

    if (!isset($_SESSION)) session_start();

    $nivel_necessario = 2;
  
    // Verifica se não há a variável da sessão que identifica o usuário
    if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] <$nivel_necessario)) {
        
         // Redireciona o visitante de volta pro login
        header("Location: /moradaMais/home.php"); 
        
   
    }

?>
       
<main class="page-adm "id="container">
        <section class="section-titulo-adm">
            <div id="titulo-adm">
                <h1>DASHBOARD ADM</h1>    
            </div>
        </section>
        <section class="d-flex">
            <aside>
                <h2>FILTROS</h2><hr>
                <ul></ul>
            </aside>
        <section class="section-table-adm">
            <div class="div-table-adm">
                <table class="table table-striped table-bordered table-hover">
                <caption>Lista de usuários</caption>
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Status Cadastro</th>
                        <th scope="col">Cadastrado desde</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php while ($usuario = $result->fetch_assoc()): ?>
                        <tr> 
                            <th scope="row"><?= $usuario['user_id']; ?></th>
                            <td><?= $usuario['user_name']; ?></td>
                            <td><?= $usuario['user_email']; ?></td>
                            <?php if(isset($usuario['user_img'])): ?>
                            <td> <img class="m-1"style="width:50px; height:40px"src="<?= $usuario['user_img'];?>" alt=""></td>
                            <?php else: ?>
                                <td><p>Sem imagem</p></td>                              
                            <?php endif; ?>
                            <td><?php if($usuario['user_ativo'] == 1): 
                                echo '<p class="text-success">Ativo</p>'
                                ?> 
                                <?php else: ?>
                                    echo '<p>Inativo</p>'
                                <?php endif; ?>
                            </td>
                            <td><?= $usuario['cadastro']; ?></td>
                        </tr>
                    <?php endwhile; ?>    
                    </tbody>
                </table>
            </div>
        </section>

    </main>
    
    <?php  include_once('includes/footer.php')?>
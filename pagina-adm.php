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
        echo "<script> alert('Página restrita!')</script>";
        echo "<script> window.location.href='/moradaMais/home.php'</script>";
        
   
    }

?>
       
<main class="page-adm" id="container">
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
        <section class="section-content-adm">
            <div class="div-table-adm">
                <table class="table table-striped table-bordered table-hover">
                <caption>Lista de usuários</caption>
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Locador</th>
                        <th scope="col">Locatário</th>
                        <th scope="col">Região</th>
                        <th scope="col">Descrição do Imóvel</th>
                        <th scope="col">Imagem casa</th>
                        <th scope="col">Imagem casa</th>
                        <th scope="col">Status Cadastro</th>
                        <th scope="col">Cadastrado desde</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php while ($usuario = $result->fetch_assoc()): ?>
                        <tr> 
                            <th scope="row"><?= $usuario['user_id']; ?></th>
                            <td><?= $usuario['first_name']; ?></td>
                            <td><?= $usuario['last_name']; ?></td>
                            <td><?= $usuario['user_email']; ?></td>
                            <?php if(isset($usuario['user_img'])): ?>
                            <td> <img class="m-1"style="width:50px; height:40px"src="<?= $usuario['user_img'];?>" alt=""></td>
                            <?php else: ?>
                                <td><p>Sem imagem</p></td>                              
                            <?php endif; ?>
                            <td><?php if($usuario['check_locador'] == 1):
                           echo '<p class="text-success">Sim</p>'
                            ?>
                            <?php else:
                                echo '<p class="text-danger">Não</p>'
                                ?>
                                <?php endif; ?>
                                </td>
                            <td><?php if($usuario['check_locatario'] == 1):
                            echo '<p class="text-success">Sim</p>'
                            ?>
                            <?php else:
                                echo '<p class="text-danger">Não</p>'
                                ?>
                                <?php endif; ?>
                                </td>
                            <td><?php if($usuario['regiao'] == "Escolha uma opção"): 
                                echo '<p class="text-warning">Sem informação</p>'
                                ?>
                                 <?php else:
                                echo $usuario['regiao']
                                ?>
                                <?php endif; ?>                            
                            </td>
                            <td><?= $usuario['descricao_imovel']; ?></td>
                            <?php if(isset($usuario['imgCasa1'])): ?>
                            <td> <img class="m-1"style="width:50px; height:40px"src="<?= $usuario['imgCasa1'];?>" alt=""></td>
                            <?php else: ?>
                                <td><p>Sem imagem</p></td>                              
                            <?php endif; ?>
                            <?php if(isset($usuario['imgCasa2'])): ?>
                            <td> <img class="m-1"style="width:50px; height:40px"src="<?= $usuario['imgCasa2'];?>" alt=""></td>
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
            <div id="div-cadast-admin">
                <form action="back-end/cadastrarAdmin.php" method="post" class="form-cadas-admin">
                    <fieldset class="">
                        <h2>Dados Cadastro de Admin</h2>
                        <div class="input-block">
                                <label for="name">Nome <small>(Ex. admin)</small></label>
                                <input name="nome" id="name" required>
                            </div>
                            <div class="input-block">
                                <label for="email">Email <small>(eu@eu.com.br)</small> </label>
                                <input name="email" id="email" type="email" required>
                            </div>
                        <div class="input-block">
                            <label for="txSenha">Senha <small>(alphanumérico)</small></label>
                            <input type="password" name="pass" id="txSenha" />
                        </div>
                        <input type="number" name="nivel" value="1" hidden>
                        <button type="submit" class="btn btn-success" name="cadastrar">Enviar</button>
                    </fieldset>
                </form>
            </div>
        </section>
</main>
    
    <?php  include_once('includes/footer.php')?>
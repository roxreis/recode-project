<?php  include_once('includes/header.php')?>

        <div class="header-content">
            <strong>Que legal que você está aqui! Quer encontrar um lugar bacana?</strong>
            <p>O primeiro passo, é fazer um cadastrinho.</p>
        </div>   
        <main>
            <form action="cadastrarUsuario.php" id="create-class" method="POST" enctype="multipart/form-data">
                <fieldset>
                        
                    <div class="input-block">
                        <label for="name">Nome Completo</label>
                        <input name="name" id="name" required>
                    </div>
                    <div class="input-block">
                        <label for="email">Email <small>(eu@eu.com.br)</small> </label>
                        <input name="email" id="email" type="email" required>
                    </div>
                    <div class="input-block">
                        <label for="cpf">CPF<small>(somente números)</small></label>
                        <input name="cpf" id="cpf" type="number"  required>
                    </div>
                    <div class="input-block ">
                        <label for="pass">Senha</label>
                        <input name="pass" id="pass" type="password" required></input>
                    </div>
                    <div class="input-block ">
                        <label for="img">Sua Foto</label>
                        <input type="file" name="img" id="img">
                    </div>
                    <input type="number" name="nivel" value="1" hidden>
                </fieldset>
            </form>

           
        </main>

  
    <?php  include_once('includes/footer.php')?>
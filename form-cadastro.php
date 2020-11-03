<?php  include_once('includes/header.php')?>

        <div class="form-cadastro-titulo" id="container">
            <!-- <div>
                <strong>Que legal que você está aqui! Quer encontrar um lugar bacana?</strong>
                <p>O primeiro passo, é fazer um cadastrinho.</p>
            </div> -->
        </div>   
        <main id="container" class="d-flex justify-content-center">
            <form action="back-end/cadastrarUsuario.php" id="cadastro-usuario" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <h2>Dados de Cadastro</h2>
                    <div class="input-block">
                        <label for="name">Nome</label>
                        <input name="first_name" id="name" required>
                    </div>
                    <div class="input-block">
                        <label for="name">Sobrenome</label>
                        <input name="last_name" id="name" required>
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
                    <input type="number" name="ativo" value="1" hidden>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="locador" id="exampleRadios1" value="1" checked>
                        <label class="form-check-label ml-3" for="exampleRadios1">
                            Estou procurando casa para dividir o aluguel
                        </label>
                    </div>
                    <div class="my-5">
                        <label > <strong>Se você tem uma casa e quer anunciá-la para enontrar quem queira dividir o aluguel, preencha também abaixo:</strong></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="locatario" type="radio" id="exampleRadios2" value="1">
                        <label class="form-check-label ml-3" for="exampleRadios2">
                            Estou oferecendo minha casa para dividir o aluguel
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Região de São Paulo</label>
                        <select name="regiao" class="form-control">
                        <option  selected>Escolha uma opção</option>
                            <option>Zona Norte</option>
                            <option>Zona Sul</option>
                            <option>Zona Leste</option>
                            <option>Zona Oeste</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrição do imóvel</label>
                        <textarea class="form-control" name="descricao_imovel"id="exampleFormControlTextarea1" placeholder="Ex. 2 quartos, sala e cozinha" rows="3"></textarea>
                    </div>
                    <div class="input-block ">
                        <label for="img">Fotos da Casa</label>
                        <input type="file" name="imgCasa1" id="img">
                        <label for="img">Fotos da Casa</label>
                        <input type="file" name="imgCasa2" id="img">
                    </div>
                    <button type="submit" class="btn btn-success" name="cadastrar">Enviar</button>
                </fieldset>
            </form>

           
        </main>

  
    <?php  include_once('includes/footer.php')?>
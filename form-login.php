<?php  include_once('includes/header.php')?>

<main class="main-login" id="container">
  <div class="bg-verde"></div>
  <!-- Formulário de Login -->
  <section>
    <form action="back-end/validacao.php" method="post" class="form-login">
      <fieldset class="">
        <h2>Dados de Login</h2>
          <div class="input-block">
            <label for="txUsuario">Usuário</label>
            <input type="text" name="usuario" id="txUsuario" maxlength="25" />
          </div>
          <div class="input-block">
            <label for="txSenha">Senha</label>
            <input type="password" name="senha" id="txSenha" />
          </div>
            <input class="btn btn-success" type="submit" value="Entrar" />
      </fieldset>
    </form>
  </section>
</main>

  <?php  include_once('includes/footer.php')?>
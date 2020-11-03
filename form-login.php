<?php  include_once('includes/header.php')?>

<main class="main-login" id="container">
  <div class="bg-verde"></div>
  <!-- Formulário de Login -->
  <section>
    <form action="back-end/validacao.php" method="post" class="form-login">
      <fieldset class="">
        <h2>Dados de Login</h2>
          <div class="input-block">
            <label for="txUsuario">Email</label>
            <input type="email" name="email" id="txUsuario" />
          </div>
          <div class="input-block">
            <label for="txSenha">Senha</label>
            <input type="password" name="senha" id="txSenha" />
          </div>
          <div class="input-block mt-3">
            <label>Nível de acesso</label>
            <select name="who" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
              <option selected value="1">Usuário</option>
              <option value="2">Admin</option>
            </select>
          </div>
          <div class="input-block">
            <button  class="btn btn-success" type="submit" >Entrar</button>
          </div>
      </fieldset>
    </form>
  </section>
</main>

  <?php  include_once('includes/footer.php')?>
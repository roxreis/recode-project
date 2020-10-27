
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">          
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/partials/header.css">
    <link rel="stylesheet" href="styles/partials/page-give-classes.css">
    <link rel="stylesheet" href="styles/partials/forms.css">
    <script src="/scripts/addField.js" defer></script>

    <title>Matchy | conquiste algo importante</title>
</head>
<body id="page-give-classes">

    <div id="container">
        <header class="page-header">
            <div class="top-bar-container">
                <a href="/"><img src="images/icons/back.svg" alt="Voltar"></a>
                <img src="/image/logo-macthy.png" alt="proffy">
            </div>
            <div class="header-content">
                <strong>Que legal que você está aqui! Quer encontrar um lugar bacana?</strong>
                <p>O primeiro passo, é fazer um cadastrinho.</p>
            </div>   
        </header>
        <main>
            <form action="cadastrarUsuario.php" id="create-class" method="POST">
                <fieldset>
                    <legend>Seus dados</legend>
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
                        <input name="cpf" id="cpf" type="number" maxlength="11" required>
                    </div>
                    <div class="textarea-block">
                        <label for="pass">Senha</label>
                        <input name="pass" id="pass" type="password" required></input>
                    </div>
                </fieldset>
                <!-- <fieldset>
                    <legend>Sobre a aula</legend>
                    <div class="select-block">
                        <label for="subject">Matéria</label>
                        <select name="subject" id="subject" required>
                            <option value="">Selecione uma opção</option>
                            {%for subject in subjects%}
                                <option value="{{loop.index}}">
                                    {{subject}}
                                </option>
                            {%endfor%}
                        </select>
                    </div>
                    <div class="input-block">
                        <label for="cost">Custo da sua aula <small>(R$)</small> </label>
                        <input name="cost" type="cost" id="cost" type="number">
                    </div>
                </fieldset>
                <fieldset id="schedule-items">
                    <legend>Horários disponíveis
                        <button type="button" id="add-time">+ Novo Horário</button>
                    </legend>

                    <div class="schedule-item">
                        <div class="select-block">
                            <label for="weekday">Dia da semana</label>
                            <select name="weekday[]" required> 
                                <option value="">Selecione uma opção</option>
                            {%for weekday in weekdays%}
                                <option value="{{loop.index0}}">
                                    {{weekday}}
                                </option>
                            {%endfor%}
                            </select>
                        </div>
                        <div class="input-block">
                            <label for="time_from">Das</label>
                            <input type="time" name="time_from[]" required>
                        </div>
                        <div class="input-block">
                            <label for="time_to">Até</label>
                            <input type="time" name="time_to[]" required>
                        </div>
                    </div>
                </fieldset> -->
            </form>
            <footer>
                <p>
                    <img src="images/icons/warning.svg" alt="Aviso importante">
                    Importante!<br>Preencha todos os dados
                </p>
                <button type="submit" form="create-class">Salvar cadastro</button>
            </footer>
           
        </main>
    </div>
</body>
</html>
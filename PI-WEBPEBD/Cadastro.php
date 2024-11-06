<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect-IF</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="Cadastro">
    <!--- Logo --->
    <div class="logo-container">
        <img src="LOGO CONNECT IF.png" alt="Logo Connect" class="logo">
    </div>
    
    <!--- Cadastro -->
    <div class="quadro-dividido">
        <div class="lado-preto">
            <h2>BEM VINDO DE VOLTA!</h2>
            <p>Estamos felizes em ter você aqui novamente. Vamos continuar aprendendo e crescendo juntos!</p>
            <button class="btn-1" onclick="window.location.href='Login.php'">Login</button>
        </div>
        <div class="lado-branco" id="cadastro"> <!-- Adicionando ID 'cadastro' -->
            <h2>Cadastro Da Conta</h2>
            <form class="form-cadastro">
                <label for="matricula">Matrícula:</label>
                <input type="text" id="matricula" name="matricula" required>

                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="data-nascimento">Data de Nascimento:</label>
                <input type="date" id="data-nascimento" name="data-nascimento" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <label for="confirmar-senha">Confirmar Senha:</label>
                <input type="password" id="confirmar-senha" name="confirmar-senha" required>

                <button type="submit" class="btn-1">Cadastrar</button>
            </form>
        </div>
    </div>
</body>

</html>
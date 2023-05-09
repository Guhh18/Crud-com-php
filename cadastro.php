<?php
if (isset($_POST['submit'])) {

    // print_r($_POST['txt_usuario']);
    // print_r($_POST['txt_email']);
    // print_r($_POST['txt_senha']);

    include_once('conexao.php');

    $nome = $_POST['txt_usuario'];
    $email = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];

    // $sqlUsuario = mysqli_query($conectaBanco, "SELECT * FROM tb_login WHERE 'usuario' = $nome");

    $result = mysqli_query($conectaBanco, "INSERT INTO tb_login(usuario, email, senha) VALUES ('$nome', '$email', '$senha')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main class="container container-sistema">
        <div class="forms">
            <div class="form formulario-cadastro">
                <div class="title">Cadastro</div>

                <form action="cadastro.php" name="form_cadastro" method="post">
                    <div class="input-box">
                        <input type="text" name="txt_usuario" placeholder="Entre com seu usuário" required>
                    </div>

                    <div class="input-box">
                        <input type="text" name="txt_email" placeholder="Entre com seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <input type="password" name="txt_senha" placeholder="Entre com sua senha" required>
                        <img src="images/low-vision-regular-24.png" class="password-eye"></img>
                    </div>

                    <div class="input-box">
                        <button type="submit" name="submit">Cadastrar</button>
                    </div>
                </form>

                <div class="cadastro-box">
                    <a href="index.php" class="cadastro-link">Já é cadastrado?</a>
                </div>
            </div>
        </div>

    </main>
</body>

</html>
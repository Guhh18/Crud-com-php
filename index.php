<!-- BD NAME: bd_cadastro
     TABLE NAME: tb_login
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main class="container container-sistema">
        <div class="forms">
            <div class="form formulario-login">
                <div class="title">Login</div>

                <form action="confirmLogin.php" method="POST">
                    <div class="input-box">
                        <input type="text" name="email" placeholder="Entre com seu e-mail ou usuário" required>
                    </div>

                    <div class="input-box">
                        <input type="password" name="senha" placeholder="Entre com sua senha" required>
                        <img src="images/low-vision-regular-24.png" class="password-eye"></img>
                    </div>

                    <div class="input-box">
                        <button type="submit" name="submit" class="btn-login">Login</button>
                    </div>
                </form>

                <div class="cadastro-box">
                    <a href="cadastro.php" class="cadastro-link">Não é cadastrado?</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
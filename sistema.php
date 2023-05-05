<?php
session_start();
include_once('conexao.php');

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
}

$logado = $_SESSION['email'];



if (isset($_POST['busca_nome']) != '') {
    $sql = "SELECT * FROM `tb_login` WHERE usuario LIKE '{$_POST['busca_nome']}%' ORDER BY usuario ASC";

    $result = $conectaBanco->query($sql);
} else {
    $sql = "SELECT * FROM `tb_login` ORDER BY usuario ASC";

    $result = $conectaBanco->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <header>
        <a href="sair.php" class="sair">Sair</a>
    </header>

    <main class="container">
        <form name="form1" action="sistema.php" method="POST">
            <input type="text" name="busca_nome">
            <input type="submit" value="Filtrar">
        </form>

        <h1>Listagem de contas</h1>
        <table border="1" align="center">
            <thead>
                <tr>
                    <th>Usuário</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>

            <tbody>
                <?php
                while ($linha = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $linha['usuario'] . "</td>";
                    echo "<td>" . $linha['email'] . "</td>";
                    echo "<td>" . $linha['senha'] . "</td>";
                    echo
                    "<td align='center'>
                        <a href='#'>
                            <img src='images/edit-regular-24.png'></img>
                        </a>
                    </td>";
                    echo
                    "<td align='center'>
                        <a href='#'>
                            <img src='images/folder-minus-solid-24.png'></img>
                        </a>
                    </td>";
                }
                ?>
            </tbody>

        </table>
    </main>
    






    <!-- <h1>Vc acessou o sistema</h1>

        echo "<h1>Bem vindo $logado</h1>";-->


</body>

</html>
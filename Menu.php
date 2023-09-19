<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] !== true) {
        header('location: Login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <button onclick="location.href='Cadastrar.php'">
            Realizar Cadastros
        </button>
        <br/>
        <button onclick="location.href='VerCadastro.php'">
            Visualizar Cadastros
        </button>
        <br/>
        <button onclick="location.href='Logout_page.php'">
            Sair
        </button>
    </body>
</html>

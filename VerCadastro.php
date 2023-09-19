<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] !== true) {
        header('location: Login.php');
        exit();
    }

    $file = 'registro.txt';
    if(!file_exists($file)) {
        echo 'Nenhum cadastro'.PHP_EOL.'<br>';
    }
    else {
        $fileHandle = fopen($file, 'r');
        while(!feof($fileHandle)) {
            echo fgets($fileHandle).PHP_EOL.'<br>';
        }
        fclose($fileHandle);
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <button onclick="location.href='Menu.php'">
            Voltar
        </button>
    </body>
</html>

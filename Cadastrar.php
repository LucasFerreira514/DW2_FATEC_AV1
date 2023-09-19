<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] !== true) {
        header('location: Login.php');
        exit();
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullName = $_POST['fullName'];
        $academicRecord = $_POST['academicRecord'];
        $vehiclePlate = $_POST['vehiclePlate'];
        if(!empty($fullName) && !empty($academicRecord) && !empty($vehiclePlate)) {
            $file = 'registro.txt';
            $fileHandle = fopen($file, 'a');
            fwrite($fileHandle, $fullName.'|'.$academicRecord.'|'.$vehiclePlate.PHP_EOL);
            fflush($fileHandle);
            fclose($fileHandle);
            echo 'Cadastro realizado';
        }
        else {
            echo 'Informações insuficientes';
        }
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='post'>
            <label>
                Nome completo:
                <input name='fullName'>
            </label>
            <br/>
            <label>
                Registro acadêmico:
                <input name='academicRecord'>
            </label>
            <br/>
            <label>
                Placa do veículo:
                <input name='vehiclePlate'>
            </label>
            <br/>
            <input type='submit' value='Cadastrar'>
        </form>
        <button onclick="location.href='Menu.php'">
            Voltar
        </button>
    </body>
</html>

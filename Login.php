<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        session_start();
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        if($username === 'portaria' && $pass === 'FatecAraras') {
            $_SESSION['isLogged'] = true;
            header('location: Menu.php');
        } else {
            $_SESSION['isLogged'] = false;
        }
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='post'>
            <label>
                Usuário:
                <input type='text' name='username'>
            </label>
            <br/>
            <label>
                Senha:
                <input type='password' name='pass'>
            </label>
            <br/>
            <input type='submit' value='Entrar'>
        </form>
    </body>
</html>

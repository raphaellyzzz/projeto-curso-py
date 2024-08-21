<!-- ligado ao login -->
<?php 
    // print_r($_REQUEST);
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $result = $conexao->query($sql);
        
        if(mysqli_num_rows($result) == 1) {
            $user = $result->fetch_assoc();
            
            $_SESSION['usuario_id'] = $user['id'];
            $_SESSION['email'] = $email;
            $_SESSION['nome'] = $user['nome'];
            header('Location: painel.php');
        } else {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
    } else {
        header('Location: login.php');
    }
?>

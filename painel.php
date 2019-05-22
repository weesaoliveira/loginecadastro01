<?php
session_start();
include('verifica_login.php');
?>

<h2>Eaí <?php echo $_SESSION['nome'];?> meu camarada!</h2>
<h2><a href="logout.php">Sair</h2>
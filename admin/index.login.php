<?php
    session_start();
    
    if(isset($_SESSION['usuario'])){
        header('Location: modificar.php');
        echo $_SESSION['usuario'];
    }else{
        header('Location: login.php');
    }
?>

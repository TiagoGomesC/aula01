<?php 
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
if(!isset($_SESSION['nome'])){
    header("Location: ../cad/login.php");
    exit();
}
?>
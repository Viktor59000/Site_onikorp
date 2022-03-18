<?php 
    session_start(); 
    session_destroy(); 
    header('Location:Oni_connexion.php'); 
    die();
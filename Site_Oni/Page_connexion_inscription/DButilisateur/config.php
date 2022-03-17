<?php 
        
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=oni_korp;charset=utf8", "root", "root");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }

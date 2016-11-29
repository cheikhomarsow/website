<?php

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=websitecosinus', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
?>
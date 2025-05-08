<?php
    define('HOST','localhost');
    define('BDD','eternity');
    define('username','root');
    define('password','');

    $connexion = mysqli_connect(HOST,username,password,password) or die('Erreur de connexion de la base donnée');
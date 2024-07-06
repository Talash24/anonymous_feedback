<?php 
    
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'anonymous';

    try{
        $dsn = "mysql:host=$host;dbname=$dbname";
        $pdo = new PDO($dsn, $user, $password);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Connection failed: ". $e -> getMessage();
        exit();
    }
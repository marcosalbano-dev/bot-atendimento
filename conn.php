<?php
    $host   = "172.28.1.160"; // IP do Banco
    $user   = "marcos.albano"; // Usuário
    $pswd   = "Albano@1971"; // Senha
    $dbname = "bot"; // Banco
    $port   =  5432;

    $conn = pg_connect("host=$host user=$user port=$port password=$pswd dbname=$dbname") or die (pg_last_error($conn));

    if(!$conn){
        echo 'deu ruim';
    } else {
        echo "deu bom";
    }
?>
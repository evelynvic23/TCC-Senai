<?php

    // Variáveis para conectar com  o banco de dados
    // $server_host = "localhost";
    // $server_user = "root";
    // $server_password = "";
    // $database_name = sge;

    //Declaração de constantes para conectar com o banco 
    //Em define deixar sempre em caixa alta
    define('SERVER_HOST', 'localhost:3310');
    define('SERVER_USER', 'root');
    define('SERVER_PASSWORD', '');
    define('DATABASE_NAME', 'sge');

    //Função para conectar com o banco de dados
    //direta e sem tratamento de erros

    //Função utilizando as variáveis
    // $conexao = mysqli_connect($server_host, $server_user, $server_password, $database_name);

    //Função utilizando as constantes
    $conexao = mysqli_connect(SERVER_HOST, SERVER_USER, SERVER_PASSWORD, DATABASE_NAME);

    //Função sem o uso de variáveis ou constantes
    // $conexao = mysqli_connect("localhost", "root", "", "sge");
 
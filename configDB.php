<?php 
//configDB.php

//Dados para escolher do Database (DB)
$dbhost = "localhost";
$dbuser = "root";   //Usuário Raiz (Rute)
$dbpass = "";
$dbname = "sistemaDeLogin";

//Conexão com o banco de dados
$conecta = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($conecta->connect_error){
    die("Não foi possivel conectar ao Banco de Dados: " . $conecta->connect_error);
}else{
    //echo "<h1>conectou no BD Manowwwww!</h1>";
}
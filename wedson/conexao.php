<?php

$conexao = mysqli_connect('localhost', 'root', '', 'seguranca_2', '3306');

if(!$conexao) {
    die("Erro de conexão");
}
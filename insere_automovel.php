<?php
$dbname = 'cadastrocarros';
$dbhost = 'localhost:3306';
$db_user = 'root';
$db_senha = "";
$pdo = new PDO("mysql:dbname=".$dbname.";host=".$dbhost, $db_user, $db_senha);

$nome = filter_input(INPUT_POST, 'nome');
$placa = filter_input(INPUT_POST, 'placa');
$chassi = filter_input(INPUT_POST, 'chassi');
$montadora = filter_input(INPUT_POST, 'montadora');

$sql = $pdo->prepare("INSERT INTO automoveis (codigo, nome, placa, chassi, montadora) VALUES (default, :nome, :placa, :chassi, :montadora)");
$sql1 = $pdo->prepare("INSERT INTO montadoras (codigo, nome) VALUES (default, :nome)");

$sql1->bindValue(':nome', $montadora);
$sql1->execute();

$sql->bindValue(':nome', $nome);
$sql->bindValue(':placa', $placa);
$sql->bindValue(':chassi', $chassi);
$sql->bindValue(':montadora', $montadora);
$sql->execute();


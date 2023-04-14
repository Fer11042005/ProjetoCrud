<?php
require 'insere_automovel.php';

$lista = [];
$sql1 = $pdo->query("SELECT * FROM montadoras");
if($sql->rowCount()>0){
    $lista = $sql1->fetchAll(PDO::FETCH_ASSOC);
}
?>

<h1>Listagem de Carros</h1>
<table border="1">
    <tr>
        <th>codigo<th>
    </tr>
    <?php foreach($lista as $carros):?>
        <tr>
            <td><?=$carros['codigo'];?></td>
            <td><?=$carros['nome'];?></td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="index.php">Cadastrar Carros</a>
    
<?php
require "./connect.php";

$id1=filter_input(INPUT_GET,'id');
$nomes=filter_input(INPUT_POST,'nome');
$emails=filter_input(INPUT_POST,'email');
$telef=filter_input(INPUT_POST,'tele');

if($id1 && $nomes && $emails && $telef){
    $sql=$pdo->prepare("UPDATE cad SET nome = :nome, email = :email, telefone = :tele WHERE id= :id");
    $sql->bindValue(':id', $id1);
    $sql->bindValue(':nome', $nomes);
    $sql->bindValue(':email', $emails);
    $sql->bindValue(':tele', $telef);
    $sql->execute();

    header("Location:../../index.php");
    exit;
}


?>
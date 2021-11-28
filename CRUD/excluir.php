<?php
require "./acesso/config/connect.php";

$id=filter_input(INPUT_GET,'id');

if($id){
    $sql=$pdo->prepare("DELETE FROM cad WHERE id=:id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("location:./index.php");
}else{
    header("location:./index.php");
    exit;
}


?>
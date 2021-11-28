<?php
require "../config/connect.php";

$nome=filter_input(INPUT_POST,'nome');
$email=filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
$tel=filter_input(INPUT_POST,'tele');


if($email){
    
    $sql=$pdo->prepare("SELECT * FROM cad WHERE email=:email ");  
    $sql->bindValue(':email',$email);
    $sql->execute();


    if($sql->rowCount() ===0){

        $sql=$pdo->prepare("INSERT INTO cad (nome, email, telefone) VALUES ( :nome, :email, :tel) ");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':tel', $tel);
        $sql->execute();

        
        header("Location:../../index.php");
        exit;
        
    }else{
        header("Location:../../index.php");
    exit;
    }

}else{
    header("Location:../../index.php");
    exit;
}
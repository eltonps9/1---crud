<?php
require "./acesso/config/connect.php";

$id=filter_input(INPUT_GET,'id');
$lista=[];



if($id){
    $sql=$pdo->prepare("SELECT * FROM cad WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
        if($sql){
            $lista=$sql->fetch(PDO:: FETCH_ASSOC);
        }
}

?>
<div class="right">
    <h1>
        EDITAR
        <hr>
    </h1>
    </div>
    <div class="lefth">
        <form action="./acesso/config/editar_acao.php?id=<?=$lista['id'];?>" method="post">
            Nome:
            <br>
            <input type="text" name="nome" value="<?=$lista['nome'];?>" required autofocus>
            <br>
            Email:
            <br>
            <input type="text" name="email" value="<?=$lista['email'];?>" required>
            <br>
            Telefone:
            <br>
            <input type="text" name="tele" value="<?=$lista['telefone'];?>"  required>
            <br>
            <br>
            <input type="submit" value="salvar">

        </form>
    <button><a href="./index.php">voltar</a></button>
            
    </div>


    
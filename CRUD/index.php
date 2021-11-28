<?php
require "./acesso/config/connect.php";

$array_conect=[];

$sql=$pdo->query("SELECT * FROM cad");

if($sql->rowCount()>0){
    $array_conect=$sql->fetchAll(PDO::FETCH_ASSOC);
}else{
    echo 'ainda nao tem cadastros';
    echo '<hr>';
}

?>




<div class="corpo">
    <div class="right">
    <h1>
        CRUD
    </h1>
    </div>
    <div class="lefth">
        <form action="./acesso/pages/cadastrar.php" method="post">
            Nome:
            <br>
            <input type="text" name="nome" placeholder="Nome" required autofocus>
            <br>
            Email:
            <br>
            <input type="text" name="email" placeholder="Email" required>
            <br>
            Telefone:
            <br>
            <input type="text" name="tele" placeholder="Telefone" required>
            <br>
            <br>
            <input type="submit" value="cadastrar">
        </form>
    </div>
    <div class="table">

    <table border="1px solid">
        <tr border="2 px solid">
            <td width="180px"> <strong> NOME</strong></td>
            <td width="180px"><strong> EMAIL</strong></td>
            <td width="180px"><strong> TELEFONE</strong></td>
            <td width="180px"><strong> AÇÕES</strong></td>
        </tr>
        <?php foreach($array_conect as $chave):?>
        <tr>
            <td><?=$chave['nome'];?></td>
            <td><?=$chave['email'];?></td>
            <td><?=$chave['telefone'];?></td>
            <td>
                <a href="./excluir.php?id=<?=$chave['id'];?>"><strong>apagar</strong></a>
                <a href="./editar.php?id=<?=$chave['id'];?>"><strong>editar</strong></a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>

    
    
</div>

</div>
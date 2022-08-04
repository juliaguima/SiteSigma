<?php
include_once '../includes/_banco.php';
include_once './_header.php';

if(isset($_GET['id']) || !empty($_GET['id'])){
   
    $id = $_GET['id'];
    $sql = "SELECT * FROM categorias WHERE CategoriaID = ".$id;
    $resultado = mysqli_query($conn,$sql);
    $dados = mysqli_fetch_array($resultado,MYSQLI_ASSOC);

}else{
    $id = '';
    $dados ['Nome'] = '';
    $dados['descricao'] = '';

}
include_once './_menu.php'

?>
<main>
<h2> Administração das categorias</h2>
<a href="categoria-lista.php">Listagem</a>
<hr>
<form action="categoria-processa.php" method ="post">
    <input type="text" value="salvar" name="acao">
    <input type="text" name="id" value="<?php echo $id;?>"><br>
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" value="<?php echo $dados ['Nome'];?>"><br>
    <label for="nome">Descrição:</label><br>
    <textarea id="descricao" name="descricao"><?php echo $dados ['descricao'];?></textarea></br>
    <hr>
    <input type="submit" value="Enviar">
 </form>
 </main>

<?php

include_once './_footer.php';
?>
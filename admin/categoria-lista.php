
<?php 
include_once "../includes/_banco.php";
include_once "./_header.php";
include_once '_valida.php';

$sql = "SELECT * from categorias";
$resultado = mysqli_query($conn, $sql);
$total = mysqli_num_rows($resultado);

include_once "./_menu.php";
?>

<main>

<h2  style= "font-size:30px; text-align:center">Administração de categorias</h2>
<p style= "text-align:center" ><a href="categoria-salvar.php">Inserir</a></p>
    <hr>
   <table style="background-color: #E5E4E2;" border="3";>
    <tr>
        <th style="background-color: grey;">ID</th>
        <th style="background-color: grey;">Nome</th>
        <th style="background-color: grey;">Ações</th>
    </tr>
<?php
if ($resultado){

while ($dado = mysqli_fetch_array($resultado)){


?>

<tr>

<td><?php echo $dado ['CategoriaID'];?></td>
<td style="text-align:center;"><a href="categoria-salvar.php?acao=salvar&id=<?php echo $dado ['CategoriaID'];?>"><?php echo $dado ['Nome'];?></a></td>
<td><a href="categoria-processa.php?acao=excluir&id=<?php echo $dado ['CategoriaID'];?>">Excluir</a></td>
</tr>

<?php

}
}else{
?>
<tr> 
    <td colspan = "3"> Resultados não encontrados</td>
</tr>

<?php
}
?>
<tr> 
    <td colspan = "3"> Total de registros: <?php echo $total;?></td>
</tr>
</table>
</main>
<?php

include_once './_footer.php';
?>
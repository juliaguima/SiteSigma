<?php
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

?>

 
<div class= "container">
   <div class= "row mt-5">     

  <?php

  // variável com SQL executado
    $sql = "SELECT * FROM produtos WHERE Ativo = 1 ORDER BY RAND() LIMIT 3";

  // executa o comando nessa conexão 
    $exec = mysqli_query($conn,$sql);

  // Informa a quantidade de registros de dados
    $numProdutos = mysqli_num_rows($exec);

  //percorre o banco de dados
    while ($dados = mysqli_fetch_assoc($exec) ) {
 
     
    
  ?>

     <div class="card m-3" style="width: 18rem;">
     <img src="./content/<?php echo $dados['Imagem'];?>" class="card-img-top" alt="...">
     <div class="card-body">
    <h5 class="card-title"><?php echo $dados['Nome'];?></h5>
    <p class="card-text"><?php echo $dados['Descricao'];?></p>
    <a href="produto-detalhe.php?id=<?php echo $dados['ProdutoID'];?>&tipo=promocao" class="btn btn-primary">Comprar</a>
  </div>
</div>

<?php
   }

?>
</div>
</div>




<?php

include_once './includes/_footer.php';
?>

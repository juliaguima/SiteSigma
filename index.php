<?php
include_once './includes/_banco.php';
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

?>

 
<div class= "container">
   <div class= "row mt-5">     
      
     
     <?php
     //repetição; 3 primeiros produtos
         for ($i=0; $i < 3 ; $i++) { 
         # code..
     
     ?>
   
     <div class="card m-3" style="width: 18rem;">
     <img src="./content/<?php echo $produtos [$i] ['imagem'];?>" class="card-img-top" alt="...">
     <div class="card-body">
    <h5 class="card-title"><?php echo $produtos [$i] ['nome'];?></h5>
    <p class="card-text"><?php echo $produtos [$i] ['descricao'];?></p>
    <a href="produto-detalhe.php?id=<?php echo $i;?>&tipo=promocao" class="btn btn-primary">Comprar</a>
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

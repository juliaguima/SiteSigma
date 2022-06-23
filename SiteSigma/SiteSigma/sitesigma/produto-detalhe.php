<?php

include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET['id'];
$tipo = $_GET['tipo'];

?>
  <div class= "container mt-5">
    <div class= "row">
      <div class="col">
        <h2><?php echo $produtos [$id] ['nome'];?></h2>
            <p><?php echo $produtos [$id] ['descricao'];?></p>
             <img src="./content/<?php echo $produtos [$id] ['imagem'];?>">
             <h4><?php echo $produtos [$id] ['preço'];?></h4>
              </div>
             </div>
             <div class="row"> 
            <div class="col">Voltar</div>
          <div class="col">Comprar</div>
        </div>
      </div>


<?php

include_once './includes/_footer.php';

?>

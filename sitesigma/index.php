<?php

include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

?>

<h1>Home</h1>

<?php

for ($i=0; $i < 10; $i++) { 
   echo $i. '<br>';

   echo $produtos [$i] ['nome'];
   echo $produtos [$i] ['preço'];
   echo '<img src="./content/'.$produtos [$i] ['imagem'].'">';
   echo '<hr>';


}


?>

<img src="./content/<?php echo $produtos[$id]['imagem'];?>">


<?php

include_once './includes/_footer.php';
?>

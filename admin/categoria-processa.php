<?php 

include_once "../includes/_banco.php";

$acao = $_REQUEST ['acao'];
$id = $_REQUEST ['id'];

switch ($acao){

case 'excluir';

    $sql = "DELETE FROM categorias WHERE CategoriaID =".$id;
    mysqli_query($conn, $sql);
    header('location: ./categoria-lista.php');
    break;

    case 'salvar':
    $nome = $_POST ['nome'];
    $descricao = $_POST ['descricao'];

    if(!isset($_POST['id']) || empty($_POST['id'])){
    $sql ="INSERT INTO 'categorias' ('Nome','descricao') VALUES ('".$nome."','".$descricao."')";
    }else{
    $sql = "UPDATE 'categorias' SET 'Nome' = '".$nome."', 'descricao' = '".$descricao."'WHERE 'CategoriaID' = '".$id."'";         
    }
    mysqli_query($conn,$sql);
    header ('location: ./categoria-lista.php');
    break;

}


?>
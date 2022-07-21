<?php 

include_once "../includes/_banco.php";

$acao = $_REQUEST ['acao'];
$id = $_REQUEST ['id'];

$swith ($acao){

case 'excluir':

    $sql = "DELETE FROM categorias WHERE CategoriaID =".$id;
    mysqli_query($conn, $sql);
    header('location: ./categoria-lista.php');
    break;

    case 'salvar':
    $nome = $_POST ['nome'];
    $descricao = $_POST ['descricao']
}




?>
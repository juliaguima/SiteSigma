<?php 

include_once "../includes/_banco.php";

$acao = $_REQUEST ['acao'];

$id = $_REQUEST['id'];

switch ($acao) {
    case 'excluir':
        $sql = "UPDATE categorias SET Ativo = 0 WHERE categoriaID = $id";

        mysqli_query($conn, $sql);

        header('location: ./categoria-lista.php');
        break;
    
    case 'salvar';
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        // print($nome);
        // print($descricao);

       if (!isset($nome) || !isset($descricao)) {
        header('location: ./categoria-lista.php');
       }

       if (!isset($id) || empty($id)) {
        $sql = "INSERT INTO categorias (nome, Ativo) VALUES ('$nome', 1)";
       } else {
        $sql = "UPDATE categorias SET nome = '$nome' WHERE categoriaID = $id";        
       }

       mysqli_query($conn, $sql);
       
       header ('location: ./categoria-lista.php');

       break;

        // case 'salvar':
        //     $nome = $_POST ['nome'];
        //     $descricao = $_POST ['descricao'];
        
        //     if(!isset($_POST['id']) || empty($_POST['id'])){
        //     $sql ="INSERT INTO 'categorias' ('nome','descricao') VALUES ('".$nome."','".$descricao."')";
        //     }else{
        //     $sql = "UPDATE 'categorias' SET 'nome' = '".$nome."', 'descricao' = '".$descricao."'WHERE 'categoriaID' = '".$id."'";         
        //     }
        //     mysqli_query($conn,$sql);
        //     header ('location: ./categoria-lista.php');
        //     break;
        
}

?>
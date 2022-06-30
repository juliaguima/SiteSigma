<?php

include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';


//validação do envio da variável

$a = array(1);
if (isset ($_POST['txtNome'])) {
    $nome = ($_POST['txtNome']);
    $email =($_POST['txtemail']);
    $contato=($_POST['txtcontato']);
    $mensagem =($_POST['txtmensagem']);
    print_r($a);

}



// strtoupper: caixa alta.
?>



<h1>Contato</h1>

        <form action = "./contato.php" method = "post">
        <label for="txtNome">Nome Completo: </label>
        <br>
        <input type="text" name="txtNome" id="txtNome" required>
        
    </form>
        <form action = "./contato.php" method = "post">
        <label for="txtemail">Email: </label>
        <br>
        <input type="text" placeholder="mail@exemplo.com.br" />
       

    </form>
        <form action = "./contato.php" method = "post">
        <label for="txtcontato">Contato: </label>
        <br>
        <input type="text"name="txtcontato" id="txtcontato" placeholder="(00)000000000" />


    </form>

        <label for="txtmensagem">Mensagem: </label>
    <br>
        <p class="text">
        <textarea placeholder="Escreva sua mensagem" /></textarea>
        </p>

    <p class="submit">
        <input type="submit" value="Enviar" />
    </p>

<?php
include_once './includes/_footer.php';
?>


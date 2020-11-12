<?php
    include_once('conexao.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <!--Menu-->
        <?php
        include_once('menu.html')
        ?>

        <main id="main">
        <header>   
        <h1>Fale conosco</h1>
        </header>
        <hr>

        <form id="formContato" method="post" action="">
        <input type="text" name="nome" placeholder="Nome"><br>
        <input type="text" name="msg" placeholder="Mensagem"><br>
        <br>
        <input type="submit" name="submit" value="Enviar">
        </form>

        <section class="contato">
        <div id="email">
            <img id="iconemail" src="./imagens/icones/email.webp">
            <p>contato@fullstackeletro.com</p>
        </div>
        <div id="wpp">
            <img id="iconwpp" src="./imagens/icones/whatsapp-icone-1.png">
            <p>(11)999999-9999</p>
        </div>
    </section>

    <br>

    <?php
        $sql = "select * from comentarios";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                echo "<hr>";
                echo "Data: ", $rows['data']. "<br>";
                echo "Nome: ", $rows['nome']. "<br>";
                echo "Mensagem: ", $rows['msg']. "<br>";
            }
                echo "<hr>";
        } else {
            echo "Nenhum comentário ainda!";
        }
    ?>
        </main>
       
        <footer id="rodape">
            <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
            <img id="imgRodape" src="./imagens/card.jpg" alt="Formas de pagamento" width="30%">
            <p id="pRodape">&copy; Recode Pro</p>
        </footer>
    </body>
</html>
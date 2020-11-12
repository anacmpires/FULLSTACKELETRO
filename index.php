<?php
    include_once('conexao.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Full Stack Eletro</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <!--Menu-->
        <?php
        include_once('menu.html')
        ?>

        <main id="main">
            <header>
            <h1>Seja bem vindo(a)!</h1> 
            <p>Aqui em nossa loja, programadores têm desconto nos produtos para sua casa!"</p>
            </header>
            <hr>
        </main>
        
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>

        <footer id="rodape">
            <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
            <img id="imgRodape" src="./imagens/card.jpg" alt="Formas de pagamento">
            <p id="pRodape">&copy; Recode Pro</p>
        </footer>
    </body>
</html>
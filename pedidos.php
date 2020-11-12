<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet" href="css/estilo.css">
        <script src="./js/funcoes.js"></script>
    </head>
    <body>
         <!-- Menu -->
         <?php
        include_once('menu.html')
        ?>
    
        <main id="main">
            <header>
            <h1>Faça seu Pedido</h1>
            </header>
            <hr>
        <form id="formPedidos">
            <form id="formdados" method="post" action="">
            <input id="formdados" type="text" name="nome_cliente" placeholder="Nome"><br>
            <input id="formdados" type="text" name="endereco" placeholder="Endereço"><br>
            <input id="formdados" type="text" name="telefone" placeholder="Telefone"><br>
            <input id="formdados" type="text" name="nome_produto" placeholder="Produto"><br>
            <input id="formdados" type="number" name="quantidade" min="1" max="100" placeholder="Quantidade"><br>
            <input id="formdados" type="text" name="valor_unitario" placeholder="Valor Unitário"><br>
            <br>
            <input type="submit" name="submit" value="Enviar">
        </form>
        </main>

        <footer id="rodape">
            <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
            <img id="imgRodape" src="./imagens/card.jpg" alt="Formas de pagamento" width="30%">
            <p id="pRodape">&copy; Recode Pro</p>
        </footer>
    </body>
</html>
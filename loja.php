<?php
    include_once('conexao.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Nossas Lojas - Full Stack Eletro</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <!--Menu-->
        <?php
        include_once('menu.html')
        ?>

        <main id="main">
        <header>
        <h1>Lojas</h1>
        </header>
        <hr>

        <section class="filial">
            <div class="local">
            <h3>Rio de Janeiro</h3>
            <p>Avenida Presidente Vargas, 5000</p>
            <p>10 &ordm; andar</p>
            <p>Centro</p>
            <p>(21) 3333-3333</p>
            </div>
        
            <div class="local">
            <h3>São Paulo</h3>
            <p>Avenida Pauista, 958</p>
            <p>3 &ordm; andar</p>
            <p>Jardins</p>
            <p>(11) 4444-4444</p>
            </div>

            <div class="local">
            <h3>Santa Catarina</h3>
            <p>Rua Major &Aacute;vila, 370</p>
            <p>7 &ordm; andar</p>
            <p>Vila Mariana</p>
            <p>(47) 5555-5555</p>
            </div>
        </section>

        </main>
        
        <footer id="rodape">
            <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
            <img id="imgRodape" src="./imagens/card.jpg" alt="Formas de pagamento" width="30%">
            <p id="pRodape">&copy; Recode Pro</p>
        </footer>
    </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta chaser="UTF8">
        <meta name="viewport" content="width=device-width, initial scale=1, shrink-to-fit=no">
        <title>Pedidos - Full Stack Eletro</title>
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="./js/funcoes.js"></script>
        <link rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
        crossorigin="anonymous">
    </head>
    <body>
        <!--Menu-->
        <?php
        include_once('menu.html')
        ?>

        <div class="container">
            <header class="mt-5">
                <h1>Faça seu Pedido</h1>
            </header>
            <hr>

            <form class="mt-5" id="formContato">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Endereço">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Telefone">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Produto">
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" name="quantidade" min="1" max="100" placeholder="Quantidade">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Valor Unitário">
                </div>

                <div id="bottonContatoEnviar">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>

            </form>

        </div>

        <footer class="p-5 text-center">
        <p class="p-2 mt-5"id="formas_pagamento"><b>Formas de pagamento:</b></p>
        <img src="./imagens/card.jpg" alt="Formas de pagamento" width="30%">
        <p class="mt-3">&copy; Recode Pro</p>
    </footer>
    </body>

     <!-- jQuery and JS bundle w/ Popper.js -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
         integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" 
         crossorigin="anonymous"></script>
</html>
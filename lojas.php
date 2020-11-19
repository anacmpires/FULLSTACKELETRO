<?php
    include_once('conexao.php')
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Nossas Lojas - Full Stack Eletro</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
        crossorigin="anonymous">
    </head>
    <body>
        <!--Menu-->
        <?php
        include_once('menu.html')
        ?>

        <div class="container">
            <header class="mt-5">
                <h1>Lojas</h1>
            </header>
            <hr>
        
            <div class="mt-5 row">
                    <div class="col">
                        <h3>Rio de Janeiro</h3>
                        <p>Avenida Presidente Vargas, 5000</p>
                        <p>10 &ordm; andar</p>
                        <p>Centro</p>
                        <p>(21) 3333-3333</p>
                    </div>
                    <div class="col">
                        <h3>São Paulo</h3>
                        <p>Avenida Pauista, 958</p>
                        <p>3 &ordm; andar</p>
                        <p>Jardins</p>
                        <p>(11) 4444-4444</p>
                    </div>

                    <div class="col">
                        <h3>Santa Catarina</h3>
                        <p>Rua Major &Aacute;vila, 370</p>
                        <p>7 &ordm; andar</p>
                        <p>Vila Mariana</p>
                        <p>(47) 5555-5555</p>
                    </div>
            </div>
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
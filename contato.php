<?php
    include_once('conexao.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <!--Menu-->
        <?php
        include_once('menu.html')
        ?>

        <div class="container">
            <header class="mt-5">
            <h1>Fale conosco</h1>
            <hr>
            </header> 

            <form class="mt-5" id="formContato" method="post" action="">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
                </div>

                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensagem"></textarea>
                </div>

                <div id="bottonContatoEnviar">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
            
            <div class="mt-5 row" id="divContato">
                <div class="col">
                    <img src="./imagens/icones/email.webp" id="imgEmailContato" width="48px">
                    <p>contato@fullstackeletro.com</p>
                </div>

                <div class="col">
                    <img src="./imagens/icones/whatsapp-icone-1.png" id="imgWppContato" width="48px">
                    <p>(11) 99999-9999</p>
                </div>
            </div>

        </div>

        <div class="ml-5 mr-5">
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
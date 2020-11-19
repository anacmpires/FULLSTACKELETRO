<?php
    include_once('conexao.php')
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet" href="css/estilo.css">
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

        <div class="container-fluid">
            <header class="mt-5">
                <h1>Produtos</h1>
            </header>
            <hr>

            <div id="form_pedido">
                <a href="pedidos.php"><h2>Faça seu pedido</h2></a>
            </div>

            <div class="row">
                <div class="col-2">
                    <div class="categoria">
                        <h3>Categorias</h3>
                        <ul>
                            <li onclick="exibir_todos()">Todos (12)</li>
                            <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                            <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
                            <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
                            <li onclick="exibir_categoria('lava_roupas')">Lavadoura de roupas (2)</li>
                            <li onclick="exibir_categoria('lava_loucas')">Lava-Louças (2)</li>
                        </ul>    
                    </div>
                </div>

                    <div class="col-10">
                        <div class="row">
                        <?php
                            $sql = "select * from produtos";
                            $result = $conn->query($sql);
      
                            if($result->num_rows > 0){
                                while($rows = $result->fetch_assoc()){
                        ?>
                            <div class="col-3 colBox_produto">
                                <div class="box_produto align-middle" id="<?php echo $rows["categoria"]; ?>">
                                    <img id="imgProdutos" src="<?php echo $rows["imagem"]; ?>" width="120px">

                                    <p class="descricao"><?php echo $rows["descricao"]; ?></p>
                                    <hr> 
                                    <p class="descricao" id="preço_antigo">R$<?php echo $rows["preco"];?></p>
                                    <p class="preco">R$<?php echo $rows["precofinal"]; ?></p>
                                </div>
                            </div>
                                
                        <?php
                            }
                        } else {
                            echo "Nenhum produto cadastrado!";
                        }
                        ?>
                    </div>
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
<?php
    include_once('conexao.php');
?>

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
            <h1>Produtos</h1>
            </header>
            <hr>

            <div id="form_pedido">
                <a href="pedidos.php"><h2>Faça seu pedido</h2></a>
            </div>
            
            
            <div class=categoria>
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

            <section class="produtos">

            <?php
                $sql = "select * from produtos";
                $result = $conn->query($sql);
            
                if($result->num_rows > 0){
                    while($rows = $result->fetch_assoc()){
            ?>
            
            <div class="box_produto" id="<?php echo $rows["categoria"]; ?>">
                <img id="imgProdutos" src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="destaque(this)">
                
                <p class="descricao"><?php echo $rows["descricao"]; ?></p>
                <hr> 
                <p class="descricao"><strike>R$<?php echo $rows["preco"]; ?></strike></p>
                <p class="preco">R$<?php echo $rows["precofinal"]; ?></p>
            </div> 

            <?php
                    }
                } else {
                    echo "Nenhum produto cadastrado!";
                }
            ?>

        </section>
        </main>
        
        <footer id="rodape">
            <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
            <img id="imgRodape" src="./imagens/card.jpg" alt="Formas de pagamento" width="30%">
            <p id="pRodape">&copy; Recode Pro</p>
        </footer>
    </body>
</html>
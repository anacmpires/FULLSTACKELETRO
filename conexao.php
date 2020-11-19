<?php
    //conexao. com db
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $database = "fseletro";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("A conexão ao BD falhou ".mysqli_connect_error());
    }

    //enviar mensagem na pag contato
    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "insert into comentarios (nome, msg) values ('$nome','$msg')";
        $result = $conn->query($sql);
    }
?>    
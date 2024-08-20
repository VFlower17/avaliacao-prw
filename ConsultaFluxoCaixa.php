<?php 
    include('conexao/conexao.php');
    $tipo = $_POST['consulta'];

    if($tipo=="entrada"){
        $sql = "SELECT SUM(valor) valor FROM fluxo_caixa WHERE tipo = 'entrada'";
    }
    else if($tipo=="saida"){
        $sql = "SELECT SUM(valor) valor FROM fluxo_caixa WHERE tipo = 'saida'";
    }
    else if($tipo=="saldo"){
        $sql = "SELECT SUM(CASE WHEN tipo = 'entrada' THEN valor ELSE 0 END) - SUM(CASE WHEN tipo = 'saida' THEN valor ELSE 0 END) AS valor FROM fluxo_caixa";
    }

    $result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <header>
        <h1>Resultado da consulta</h1>
    </header>
    <?php 
        if($result){
            echo "<h3>".mysqli_fetch_array($result)."</h3>";
        }
        else{
            echo "<h2>Falha na consulta.</h2>".mysqli_error($con);
        }
    ?>
</body>
</html>
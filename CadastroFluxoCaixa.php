<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
        include('conexao/conexao.php');

        $data = $_POST['data'];
        $tipo = $_POST['tipo'];
        $valor = $_POST['valor'];
        $historico = $_POST['historico'];
        $cheque = $_POST['cheque'];
        
        $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque) VALUES ('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";
        $result = mysqli_query($con, $sql);

        if($result){
            echo "<h3>Dados cadastrados com sucesso.</h3>";
        }
        else{
            echo "<h2>Falha no cadastro.</h2>".mysqli_error($con);
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
</head>
<body>
    <header>
        <h1>Deletar dados</h1>
    </header>
    <?php 
        include('conexao/conexao.php');
        $id = $_GET['id'];
        $sql = "DELETE FROM fluxo_caixa WHERE id = $id";
        $result = mysqli_query($con, $sql);

        if($result){
            echo "<h3>Dados deletados.</h3>";
        }
        else{
            echo "<h2>Falha ao deletar dados.</h2>".mysqli_error($con);
        }
    ?>
</body>
</html>
<?php 
    include('conexao/conexao.php');
    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
    <?php 
        $sql = "UPDATE fluxo_caixa SET data = '$data', tipo = '$tipo', valor = '$valor', historico = '$historico', cheque = '$cheque' WHERE id='$id'";
        $result = mysqli_query($con, $sql);

        if($result){
            echo "<h3>Dados atualizados.</h3>";
        }
        else{
            echo "<h2>Falha ao atualizar dados</h2>".mysqli_error($con);
        }
    ?>
</body>
</html>
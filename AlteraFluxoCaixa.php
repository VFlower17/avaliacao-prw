<?php 
    include('conexao/conexao.php');

    $id = $_GET['id'];
    $sql = "SELECT * FROM fluxo_caixa WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
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
    <header>
        <h1>Alterar Dados</h1>
    </header>
    <form action="AlteraFluxoCaixaExe.php" method="post">
        <div>
            <label for="data">Data:</label>
            <input type="date" name="data" id="data" value="<?php echo $row['data']?>">
        </div>
        <div>
            <label for="tipo">Tipo:</label>
            <input type="radio" name="tipo" id="tipo" value="<?php echo $row['tipo'] == "entrada"?>"> <label for="">Entrada</label>
            <input type="radio" name="tipo" id="tipo" value="<?php echo $row['tipo'] == "saida"?>"> <label for="">Saida</label>
        </div>
        <div>
            <label for="valor">Valor:</label>
            <input type="number" name="valor" id="valor" step="0.10" value="<?php echo $row['valor']?>">
        </div>
        <div>
            <label for="historico">Histórico:</label>
            <input type="text" name="historico" id="historico" value="<?php echo $row['historico']?>">
        </div>
        <div>
            <label for="cheque">Cheque:</label>
            <select name="cheque" id="cheque">
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
            </select>
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
        </div>
        <div>
            <button type="submit">Alterar</button>
        </div>
    </form>
</body>
</html>
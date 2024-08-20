<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <?php
        include('conexao/conexao.php');
        $sql = "SELECT * FROM fluxo_caixa";
        $result = mysqli_query($con, $sql);
    ?>
    <div>
        <header>
            <h1>Consulta de Fluxo</h1>
        </header>
    </div>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Histórico</th>
            <th>Cheque</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php 
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['data']."</td>";
                echo "<td>".$row['tipo']."</td>";
                echo "<td>".$row['valor']."</td>";
                echo "<td>".$row['historico']."</td>";
                echo "<td>".$row['cheque']."</td>";
                echo "<td><a href='AlteraFluxoCaixa.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href='DeletaFluxoCaixa.php?id=".$row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
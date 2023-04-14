<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Tarefas</title>
</head>

<body class="">
    <div class="container">
        <h1 class="text-center mt-4 text-secondary">Cadastro de Tarefas</h1>
        <table border="1" class="table  p-2 mt-5  table-striped-columns table-hover">
            <tr>
                <th scope="col table-primary">Nome da Tarefa</th>
                <th scope="col">Data da Tarefa</th>
                <th scope="col">Situação da tarefa</th>
            </tr>

            <?php

            $conexao = mysqli_connect("localhost", "root", "", "contato");

            $sqlBusca = "select * from tarefas";
            $todasAstarefas = mysqli_query($conexao, $sqlBusca);

            while ($umaPessoa = mysqli_fetch_assoc($todasAstarefas)) {
                echo "<tr>";
                echo "<td>" . $umaPessoa["nome_tarefa"] . "</td>";
                echo "<td>" . $umaPessoa["data_tarefa"] . "</td>";
                echo "<td>" . $umaPessoa["situacao_tarefa"] . "</td>";
                echo "</tr>";
            }
            mysqli_close($conexao)
            ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
</head>
<body>
    <h1>Cadastro de Contatos</h1>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
        </tr>
   
    <?php

     $conexao = mysqli_connect("localhost", "root", "", "contato");

       $sqlBusca = "select * from contato";
       $todasAsContato = mysqli_query($conexao, $sqlBusca);
          
       while($umaPessoa = mysqli_fetch_assoc($todasAsContato)){
        echo "<tr>";
        echo "<td>". $umaPessoa["nome"]. "</td>";
        echo "<td>". $umaPessoa["telefone"]. "</td>";
        echo "</tr>";

       }
     mysqli_close($conexao)
    ?>
     </table>
</body>
</html>
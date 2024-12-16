<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa 2</title>
    <style>
        table, th, td{
            border: 1px solid black;
        }

        th {
            background-color: gainsboro;
        }

        td {
            background-color: lemonchiffon;
        }

        table{
            width: 100%;
        }
    </style>
</head>
<body>

<?php
    $produtos=[
        ['nome'=> 'Grand Old Parr', 'preco' => 154,90, 'desconto'=> 10],
        ['nome'=> 'Red Label', 'preco'=> 74,90, 'desconto'=> 8],
        ['nome'=> 'Chivas Regal', 'preco'=> 179,90, 'desconto'=> 5],
        ['nome'=> 'Jack Daniels', 'preco'=> 169,90, 'desconto' => 12],
    ];
?>

<table>
    <tr>
        <th>Nome</th>
        <th>Valor Venda (R$)</th>
        <th>Desconto %</th>
        <th>Valor Desconto (R$)</th>
        <th>Valor Com Desconto (R$)</th>
    </tr>
    <?php
    foreach($produtos as $produto) {
        $valorDesconto = $produto['preco'] * $produto['desconto'] / 100;
        $valorComDesconto = $produto['preco'] - $valorDesconto;
        echo "<tr>";
        echo "<td>{$produto['nome']}</td>";
        echo "<td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>";
        echo "<td>{$produto['desconto']}</td>";
        echo "<td>" . number_format($valorDesconto, 2, ',', '.') . "</td>";
        echo "<td>R$ " . number_format($valorComDesconto, 2, ',', '.') . "</td>";
        echo "</tr>";
    };
    ?>
</table>

</body>
</html>
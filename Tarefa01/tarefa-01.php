<?php

$cervejas = [
    ['nome' => 'Heineken long neck', 'tamanho' => '330ml', 'preco' => 6.49],
    ['nome' => 'Heineken lata', 'tamanho' => '350ml', 'preco' => 5.19],
    ['nome' => 'Amstel lata', 'tamanho' => '350ml', 'preco' => 3.59],
    ['nome' => 'Itaipava lata', 'tamanho' => '350ml', 'preco' => 2.65],
    ['nome' => 'Original lata', 'tamanho' => '330ml', 'preco' => 3.29],
    ['nome' => 'Stella long neck', 'tamanho' => '330ml', 'preco' => 5.49],
    ['nome' => 'Spaten lata', 'tamanho' => '269ml', 'preco' => 5.49],
    ['nome' => 'Budweiser long neck', 'tamanho' => '330ml', 'preco' => 4.49],
    ['nome' => 'Corona long neck', 'tamanho' => '330ml', 'preco' => 6.89],
    ['nome' => 'Michelob long neck', 'tamanho' => '330ml', 'preco' => 5.19],
    ['nome' => 'Budweiser lata', 'tamanho' => '350ml', 'preco' => 3.99],
    ['nome' => 'Corona lata', 'tamanho' => '269ml', 'preco' => 4.59],
    ['nome' => 'Amstel long neck', 'tamanho' => '355ml', 'preco' => 4.79],
];

asort($cervejas);
//print_r($cervejas);
foreach($cervejas as $key => $cerveja) {
    echo $cervejas[$key]['nome'];
    echo "\n";

    if($cervejas[$key]['preco'] >= 5.19) {
        echo "Essa cerveja está cara. \n";
    }

    if($cervejas[$key]['preco'] <= 4.79) {
        echo "Essa cerveja tem um bom custo-benefício. \n";
    }

    if($cervejas[$key]['preco'] == 6.89) {
        echo "Mas o sabor não tem igual. \n";
    }

}
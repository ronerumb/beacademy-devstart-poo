<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Tenis', 'Tenis pra correr');

$p1 = new Produto("Tenis",500,$c1);


var_dump($p1);
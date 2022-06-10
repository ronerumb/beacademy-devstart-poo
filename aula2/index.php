<?php

include 'Produto.php';

$p2 = new Produto();

$p1 = new Produto();
$p1-> setNome('Tênis para corrida');
$p1-> setPrice(299);

var_dump($p1);
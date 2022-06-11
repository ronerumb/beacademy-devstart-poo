<?php

include 'Validar.php';
include "ValidarBR.php";
include 'ValidarUS.php';

$cpf = '12312312312';
$cpf2= '54456465454564564564';

$br = new ValidarBR();
$br->validarDocumento($cpf);

$us = new ValidarUS();
$us->validarDocumento($cpf2);

echo 'Funcionou';
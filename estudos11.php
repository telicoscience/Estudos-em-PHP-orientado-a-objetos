<?php
require 'classes/produto.php'; 
require   'models/produto.php'; 

use models\Produto; 

$produto  = new  Produto();
$produto->mostrarDetalhes(); 

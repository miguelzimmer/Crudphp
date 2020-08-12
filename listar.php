<?php
require_once 'class/produtos.php';
$p = new Produtos();
//conexao com banco de dados
$p->conectar("crud","localhost","root","");  

$dados = $p->listar();

echo json_encode(["data" => $dados]);
?>

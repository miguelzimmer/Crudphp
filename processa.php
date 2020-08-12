<?php
    require_once 'class/produtos.php';
    $p = new Produtos();

    $p->conectar("crud","localhost","root","");

    $cepOrigem = $_POST['cepOrigem'];
    $cepDestino = $_POST['cepDestino'];
    
    $p->cadastrar($cepOrigem,$cepDestino);
    
    //  if(is_numeric($cep) = true || strlen($cep) = 8)
    // {
       

    // }
    function testCep($cep) {
    
        $ch = curl_init();
        $url = "http://viacep.com.br/ws/{$cep}/json/";
    // CURL
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        
        var_dump($result);
        curl_close($ch);

    }
    // $cepOrigem = addslashes($_POST['cepOrigem']);
    // $cepDestino = addslashes($_POST['cepDestino']);


?>

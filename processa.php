<?php

// $cepOrigem = addslashes($_POST['cepOrigem']);
// $cepDestino = addslashes($_POST['cepDestino']);
     // vereficar se a pessoa clicou no botao
     $cep = $_POST['cepOrigem'];
     if(is_numeric($cep) = true || strlen($cep) = 8)
    {
        function testCep($cep) {
    
            $ch = curl_init();
            $url = "http://viacep.com.br/ws/{$cep}/json/";
            $headers = "79a4d7e049625b8d647a40e481070b00";
        // CURL
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $url);
            $result = curl_exec($ch);
            return json_decode($result);
            var_dump($result);
            curl_close($ch);

        }

    }


?>

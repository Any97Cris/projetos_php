<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://glowing-daffodil-72bff9.netlify.app");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 
    "nome=Crisciany&idade=25&sexo=feminino");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resposta = curl_exec($ch);

curl_close($ch);

print_r($resposta);

?>
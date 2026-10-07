<?php
function verificarURL($url) {
    return $url == parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

}

function verificarMetodo($metodo){
    return $metodo == $_SERVER ['REQUEST_METHOD'];

}

$rotas = [
    [
        "url" => "/",
        "metodo" => "GET",
        "conteudo" => "centro do parque"
    ],
    [
        "url" => "/parque/montanha-russa",
        "metodo" => "GET",
        "conteudo" => "Montanha russa"
    ],
    [
        "url" => "/parque/carrossel",
        "metodo" => "GET",
        "conteudo" => "carrossel",
    ],
    [
        "url" => "/parque/Carrinho Bate-Bate",
        "metodo" => "GET",
        "conteudo" => "Carrinho Bate-Bate"
    ],
    [
        "url" => "/parque/Kamikaze",
        "metodo" => "GET",
        "conteudo" => "Kamikaze"
    ],
    [
        "url" => "/parque/Chapéu Mexicano",
        "metodo" => "GET",
        "conteudo" => "Chapéu Mexicano"
    ],
    [
        "url" => "/parque/Barco Viking",
        "metodo" => "GET",
        "conteudo" => "Barco Viking"
    ]
    
    ];

    foreach ($rotas as $rota) {
      if(verificarURL($rota['url']) && verificarMetodo($rota['metodo'])) {
        echo $reto['conteudo'];
      }
    }






   
?>
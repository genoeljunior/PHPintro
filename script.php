<?php

$categorias = [];
$categorias[] ='infantil';
$categorias[] ='adolescente';
$categorias[] ='adulto';
$categorias[] ='idoso';



$nome = $_POST['nome'];
$idade = $_POST['idade'];

var_dump($nome);
var_dump($idade);

if (empty($nome)){
    echo "o nome nao pode ser vazio";
    return;
}



if (strlen($nome)>40){
    echo "o nome é muito extenso";
    return;
}
if (strlen($nome)<3){
    echo "o nome deve ter mais de 3 caracteres";
    return;
}

if (!is_numeric($idade)){
    echo "Informe um numero para idade";
    return;
}

if ( $idade <=12){
    for ($i=0; $i<=count($categorias);$i++) {
        if($categorias[$i]=='infantil')
        echo "O nadador ", $nome, " compete na categoria ",$categorias[$i];
    }
    
} else if ($idade >=13 && $idade <=18){
    for ($i=0; $i<=count($categorias);$i++) {
        if($categorias[$i]=='adolescente')
        echo "O nadador ", $nome, " compete na categoria ",$categorias[$i];
    }
} else {
    for ($i=0; $i<=count($categorias);$i++) {
        if($categorias[$i]=='adulto')
        echo "O nadador ", $nome, " compete na categoria ",$categorias[$i];
    }
}
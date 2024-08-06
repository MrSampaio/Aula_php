<?php 

// ******************************** PRIMEIRA PARTE ********************************************

// O QUE SÃO VARIÁVEIS?

// Na programação, uma variável é um objeto capaz de reter e representar um valor ou expressão. 
// Enquanto as variáveis só "existem" em tempo de execução, elas são associadas a "nomes", 
// chamados identificadores, durante o tempo de desenvolvimento.

// TIPOS DE VARIÁVEIS

// texto (inserir um texto entre aspas simples ou duplas)
$nome = 'Sampaio';

// texto vazio
$texto_vazio = '';

// número inteiro
$num_inteiro = 10;
$zero = 0;

// número decimal (também chamado de float ou double)
$num_decimal = 10.5;

// booleanos (verdadeiro ou falso)
$verdadeiro = true;
$falso = false;

// arrays (listas)
$array = array(1, 2, 3, 4, 5);

// variáveis vazias
$null = NULL;

// funções
$funcao = is_null($null);

// operações matemáticas
$soma = 1+1000;
$subtração = 1000-1;
$divisão = 1000/2;
$multiplicação = 1000*2;
$expressão_aritmetica = (1000 * 2) / ((9*9) + ((8 + 1) + 10));

// ****************************** SEGUNDA PARTE ***************************************************

// O QUE É UM TESTE CONDICIONAL?

// Um teste condicional na programação é uma construção que permite que o código execute 
// diferentes instruções com base na avaliação de uma condição. Essa condição é uma expressão 
// que resulta em um valor booleano (verdadeiro ou falso). Dependendo do resultado, diferentes
// blocos de código são executados.

// OPERADORES CONDICIONAIS

// igual a: ==
// diferente de: !=
// maior: >
// maior igual: >=
// menor: <
// menor igual: <= 

// EXEMPLO 1

// variáveis teste
$numero1 = 1;
$numero2 = 2;

// frase para ser exibida
$frase = '';

// teste condicional
if($numero1 > $numero2){ // se for verdadeiro, exibe essa mensagem
    $frase = 'número 1 é maior';

} else{ // se for falso exibe essa
    $frase = 'número 2 é maior';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $expressão_aritmetica ?></h1>

    <h1><?php echo $frase ?></h1>
</body>
</html>
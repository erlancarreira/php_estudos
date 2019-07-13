# Variáveis Tipo

Um booleano expressa um valor lógico que pode ser verdadeiro ou falso. Para especificar um valor booleano, utilize as palavras-chave `TRUE ou FALSE`. No exemplo a seguir declaramos a variável booleana $exibir_nome, cujo conteúdo é `TRUE` (verdadeiro). Em seguida, testaremos o conteúdo dessa variável para verificar se ela é realmente verdadeira. Em caso positivo, será exibido na tela o nome "José da Silva".

    <?php 
    $exibir_nome = TRUE; // declara variável com valor TRUE

    // testa se $exibir_nome é TRUE
    if ($exibir_nome) {
    	echo 'José da Silva';
    } 

#### Resultado 
    José da Silva

No programa a seguir, criamos uma variável numérica contendo o valor 91. 
Então, testamos se a variável é maior que 90. Esta comparação também 
retorna um valor booleano (`TRUE ou FALSE`).
O conteúdo da variável $vai_chover é um booleano que será testado 
logo em seguida para a impressão da string "Vai chover".
     
    <?php

    $umidade = 91; // declara variável numérica

    // testa se é maior que 90. 
    Retorna um booleano $vai_chover = ($umidade > 90);

    // testa se $vai_chover é verdadeiro
    if ($vai_chover) {
    	echo 'Vai chover';
    }

#### Resultado
    Vai chover

Também são considerados valores falsos em comparações booleanas:

    - Inteiro 0.
    - Ponto flutuante 0.0.
    - Uma string vazia "" ou "0".
    - Um array vazio.
    - Um objeto sem elementos.
    - NULL

    






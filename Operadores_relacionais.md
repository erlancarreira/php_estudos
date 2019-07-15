# Operadores Relacionais

Operadores relacionais são usados para estabelecer comparações entre valores ou
expressões, resultado sempre um valor boolean (`TRUE` ou `FALSE`).

Comparadores | Descrição
------------ | --------- 
`==`         | Igual. Resulta verdadeiro (`TRUE`) se as expressões forem iguais.  
`===`        | Idêntico. Resulta verdadeiro (`TRUE`) se as expressões forem iguais e tiverem o mesmo tipo de dados. 
`!= ou <>`   | Diferente. Resulta verdadeiro (`TRUE`) se as variáveis forem diferentes.
`<`          | Menor que.
`>`          | Maior que.
`<=`         | Menor que ou igual a.  
`>=`         | Maior que ou igual a.

Veja a seguir alguns testes lógicos e seus respectivos resultados. No primeiro caso,
vemos a utilização errada do operador de atribuição = para realizar uma comparação;
o operador sempre retorna o valor atribuído.
     
    <?php 
    if ($a = 5) {
    	echo 'essa operação 5 é à variável $a';
    }

#### Resultado:
**essa operação atribui 5 à variável $a**

No exemplo a seguir, declaramos duas variáveis, uma integer e outra string. 
Neste caso, vemos a utilização dos operadores de comparação == e !=.

    <?php
    $a = 1234;
    $b = '1234';

    if ($a == $b) {
    	echo '$a e $b são iguais';
    }

    else if ($a != $b) {
    	echo '$a e $b são diferentes';
    }

#### Resultado:
$a e $b são iguais

No próximo caso, além da comparação entre as variáveis, comparamos também
os tipos de dados das variáveis.
    
    <?php
    $c = 1234;
    $d = '1234';

    if ($c === $d) {
    	echo '$c e $d são iguais e do mesmo tipo';
    }


    if ($c !== $d) {
    	echo '$c e $d são de tipos diferentes';
    
#### Resultado: 
$c e $d são de tipos diferentes

O PHP considera o valor zero como falso em comparações lógicas. Para evitar erros
semânticos em retorno de valores calculados por funções que podem retornar tanto
um valor booleano quanto um inteiro, podemos utilizar as seguintes comparações:
     
    <?php 
    $e = 0;
    // testa a variável é FALSE
    if ($e == FALSE) {
    echo '$e é falso';
    }

    // testa se a variável é um FALSE e do tipo boolean
    if ($e === FALSE) {
    echo '$e é FALSE e do tipo boolean'
    }

    // testa se $e é igual a zero e do mesmo tipo que zero
    if ($e === 0) {
    echo '$e é zero mesmo';
    }

#### Resultado:
Se é falso $e é zero mesmo    

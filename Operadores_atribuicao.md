# Operadores de atribuição

Um operador de atribuição é usado para definir o valor de uma variável. O operador
básico de atribuição é =, mas outros operadores podem ser utilizados. 

    <?php 
    $var   = 100;
    $var  += 5; // Soma 5 em $var;
    $var  -= 5; // Subtrai 5 em $var;
    $var  *= 5; // Multiplica $var por 5
    $var  /= 5; // Divide $var por 5
    print $var; // Resultado: 100

Operadores | Descrição
---------- | --------
++$var     | Pré-incremento. Incrementa $a em e, então, retorna $a.
$var++     | Pós-incremento. Retorna $a e, então, incrementa $a em um.
--$var     | Pré-decremento. Decrementa $a em um e, então, retorna $a.  
$var--     | Pós-decremento. Retorna $a e, então, decrementa $a em um.

    <?php
    $var = 100;
    print $var++ . ' '; // retorna 100 e incrementa para 101
    print ++$var . ' '; // incrementa para 102 e retorna
    print $var-- . ' '; // retorna 102 e decrementa para 101
    print --$var . ' '; // decrementa para 100 e retorna

##### Resultado:
100  102  102  100

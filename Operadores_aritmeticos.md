# Operadores Aritméticos

Operadores aritméticos são usados para se fazer cálculos matemáticos.

Operadores | Descrição
---------- | --------- 
+          | Adição
-          | Substração
*          | Multiplicação
/          | Divisão
%          | Módulo (resto da divisão)

Em cálculos complexos, procure usar parêtenses, sempre observando as prioridades
aritméticas. Por exemplo:
   
    <?php
    $a = 2;
    $b = 4;
    echo $a + 3 * 4 + 5 * $b . ' '; // resultado = 34
    echo ($a + 3) * 4 + (5 * $b) . ' '; // resultado = 40

O PHP faz automaticamente a conversão de tipos em operações:
    
    <?php
    // declaração de uma string contendo 10
    $a = '10';
    // soma + 5
    echo $a + 5;

##### Resultado:
15  
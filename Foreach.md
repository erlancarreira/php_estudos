# Foreach 

O **foreach** é um laço de repetição para iterações em arrays ou matrizes. 
É um **FOR** simplificado que decompõe um vetor ou uma matriz em cada um de
seus elementos por meio de sua cláusula **AS**.

```php 
    foreach ($array as $valor) {
   	   instruções
    }
```

Exemplo: 

```php 
    $frutas = array("maçã", "laranja", "pera", "banana");
    foreach ($frutas as $fruta) {
   	   print "$fruta -";
    }
```   

### Resultado:
maçã - laranja - pera - banana
___


## Continue

A instrução **continue**, quando executada em um bloco de comandos **FOR/WHILE**, 
ignora as instruções restantes até o fechamento em }. Dessa maneira o programa
segue para a próxima verificação da condição de entrada do laço de repetição.

___

## Break

O comando **break** aborta a execução de blocos de comandos, como **IF, WHILE, FOR**.
Se estivermos em uma execução com muitos níveis de iteração e quisermos abortar _n_
níveis, a sintaxe deverá ser a seguinte:

    while...
        for...
            break <quantidade de níveis>

___

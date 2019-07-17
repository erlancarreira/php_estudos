# WHILE

O **WHILE** é uma estrutura de controle similar ao **IF**. De maneira similar, tem uma
condição para executar um bloco de comandos. A diferença primodial é que o 
**WHILE** estabelece um laço de repetição, ou seja, o bloco de comandos será
executado de modo repetitivo enquanto a condição de entrada dada pela expressão
for verdadeira. Esse comando pode ser interpretado como

    "ENQUANTO (_expressão_) FAÇA { _comandos..._}.".

Quando a expressão é avaliada como **TRUE**, o programa parte para a execução de um
bloco de comandos. Ao fim da execução do bloco de comandos, constituindo um laço
de repetições que só é  interrompido quando a expressão avaliada retorna um valor
falso (**FALSE**).

```php
    while (expressão) {
        comandos;
    } 
```

No exemplo a seguir, o comando **WHILE** está avaliando a expressão 
"se $a é menor que 5" como ponto de entrada do laço de repetições. 
Na primeira vez que é executada essa comparação, retorna-se **TRUE**, 
visto que o valor de $a é 1. Logo o programa entra no laço de repetições 
executando os comandos entre { }. Observe que, dentro do bloco de comandos,
a variável **$a** é incrementada. Assim, essa execução perdurará por mais
algumas iterações. Quando seu valor for igual a 5, a execução retornará 
**FALSE** e não mais entrará no **WHILE**, deixando de executar o bloco
de comandos.

```php
    $a = 1;
    while ($a < 5) {
   	    print $a;
   	$a++;
   }
```   
### Resultado: 
1234



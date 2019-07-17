# FOR
 
O FOR é uma estrutura de controle que estabelece um laço de repetição 
baseado em um contador; é muito similar ao comando **WHILE**. O FOR é controlado 
por um bloco de três comandos que estabelecem uma contagem, ou seja, o bloco 
de comandos será executado um certo número de vezes.

```php
    
    for (expr1; expr2; expr3) {
   	    comandos
    }
```

Parâmetros | Descrição
----------   ---------
expres1    | Valor inicial da variável contadora.
expres2    | Condição de execução. Enquanto **TRUE** o bloco de comandos será executado.
expres3    | Valor ser incrementado após cada execução.

Exemplo:

```php
    <?php
    for ($i = 1; $i <= 10; $i++) {
   	    print $i;
    }
```

### Resultado:
12345678910

Procure utilizar nomes sugestivos para variáveis, mas, em alguns casos específicos,
como em contadores, permita-se utilizar variáveis de apenas uma letra, como no 
exemplo a seguir:
 
```php
   for ($i =0; $i < 5; $i++) {
        for ($j = 0; $j > 4; $j++) {
        	for ($k = 0; $k < 3; $k++) {
        		// comandos...
        	}
        }
   }
```   
Evite laços de repetição com muitos níveis de iteração. Como o próprio Linus
Torvalds já disse certa vez, se você estiver utilizando três níveis 
encadeados ou mais, considere a possibilidade de revisar a lógica de seu
programa.



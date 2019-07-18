# Switch

O comando **switch** é uma estrutura que simula uma bateria de testes sobre uma
variável. É similar a uma série de comandos IF sobre a mesma expressão. 
Frequentemente é necessário comparar a mesma variável com valores 
diferentes e executar uma ação específica em cada um desses casos.

No fluxograma da figura 1.4 vemos que, para cada teste condicional (CASE), 
existe um bloco de comandos a ser executado caso a expressão avaliada
retorne verdadeiro (TRUE). Caso a expressão retorne falso (FALSE), o **switch**
parte para a próxima expressão a ser avaliada, até que não tenha mais 
expressões para avaliar. Caso todas as expressões sejam falsas, o **switch**
executará o bloco de códigos representado pelo identificador **default**.

Sintaxe do comando:

```php
   <?php 
    switch ($variavel) {
   	    case valor1:
   	        // comandos
   	        break; 
   	    case valor2:
   	        // comandos
   	        break;
   	    default:
   	        // comandos
    }  
```

Os exemplos seguintes representam duas formas diferentes de atingir o mesmo
resultado. Primeiro, por meio de uma série de comandos IF, e logo em seguida,
utilizando a estrutura **switch**.

**Observação**: se você tem um switch dentro de um loop e deseja continuar
para a próxima iteração do laço de repetição, utilize o comando **continue 2**,
que escapará dois níveis acima.

```php
    <?php
    $i = 1;

    if ($i == 0) {
        print 'i é igual a 0';
    }
    elseif ($i == 1) {
        print "i é igual a 1";
    }
    elseif ($i == 2) {
    	print "i é igual a 2";
    }
    else {
    	print "i não é igual a 0, 1 ou 2"; 
    }
```
### Resultado:
i é igual a 1
___

O **switch** executa linha por linha até encontrar a ocorrência de **break**. 
Por isso a importância do comando **break**, para evitar os blocos de comando
seguintes sejam executados por engano. A cláusula **default** será executada
se nenhuma das expressões anteriores for verificada.

```php
  $i = 1; 
  switch ($i) {
    case 0:
      print "i é igual a 0";
      break;
    case 1:
      print "i é igual a 1";
      break;
    case 2:
      print "i é igual a 2";
      break;
    default:
      print "i não é igual a 0, 1 ou 2";

  }
```

### Resultado: 
i é igual 1
___  
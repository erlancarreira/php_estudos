# Requesição de arquivos

Em linguagens de script como o PHP, frequentemente precisamos incluir dentro
de nossos programas outros arquivos com definições de funções, constantes,
configurações ou mesmo carregar um arquivo contendo a definição de uma classe.
Para atingir esse objetivo no PHP, podemos fazer uso de um dos seguintes comandos:

**include**<_arquivo_>

A instrução **include()** inclui e avalia o arquivo informado. Seu código (variáveis,
objetos e arrays) entra no escopo do programa, tornando-se disponível a partir da
linha em que a inclusão ocorre. Se o arquivo não existir, será emitida uma mensagem
de advertência (_warning_).

Exemplo:

**tools.php**

```php
    <?php 
    function quadrado($numero) {
        return $numero * $numero;   
    }
```  

**teste.php**

```php
    <?php
    include 'tools.php'; // carrega arquivo com a função necessária
    echo quadrado(4);    // imprime o quadrado do número 4
```

### Resultado:
16
___

**require** <_arquivo_>

Similar ao **include**. Difere somente na manipulação de erros. Enquanto 
o **include** produz uma mensagem de advertência, o **require**
produz um erro fatal caso o arquivo não exista. 

**include_once** <_arquivo_>

Funciona da mesma maneira que o comando **include**, a não ser que o arquivo
informado já tenha sido incluído. Neste caso, a operação não é refeita 
(o arquivo é incluído apenas uma vez). É útil em casos em que o programa
passa mais de uma vez pela mesma instrução. Assim, evitará sobreposições,
redeclarações etc.

**require_once** <_arquivo_>

Funciona da mesma maniera que o comando **require**, a não ser que o arquivo
informado já tenha sido incluído. Neste caso, a operação não é refeita (o arquivo
é incluído apenas uma vez). É útil em casos em que o programa passa mais de uma 
vez pela mesma instrução. ASsim, podem-se evitar sobreposições, redeclarações
etc.





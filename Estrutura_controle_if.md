# Estruturas de controle

**IF**
 
O IF é uma estrutura de controle que introduz um desvio condicional, ou seja, um
desvio na execução natural do programa. Caso a condição dada pela expressão
seja satisfeita, então serão executadas as instruções do bloco de comandos. Caso
a condição não seja satisfeita, o bloco de comandos será simplesmente ignorado.
O comando **IF** pode ser lido como "SE (_expressão_) ENTÃO { _comandos..._}".
ELSE é utilizado para indicar um novo bloco de comandos delimitado por { }, caso
a condição do **IF** não seja satisfeita. Pode ser lido como "caso contrário". 
A utilização do **ELSE** é opcional.

Caso a avalização da expressão seja verdadeira, o programa parte para a execução
de um bloco de comandos; caso seja falsa, parte para a exercução do bloco de
comandos dada pelo **ELSE**.

```php   
    if (_expressão_) {

    	// comandos se expressão é verdadeira;
    }
    else {
    	// comandos se expressão é falsa;
    }
```

Exemplo:

```php    
    <?php
    $a = 1;
    if ($a == 5) {
    	echo "é igual";
    }
    else {
    	echo "não é igual";
    }
```
### Resultado:
  
   não é igual
___

Quando não explicitamos o operador lógico em testes por meio do **IF**, o comportamento
padrão do PHP é retornar TRUE sempre que a variável tiver conteúdo válido.

```php 
    <?php
    $a = 'conteúdo';
    if ($a) {
        echo '$a tem conteúdo';
    }

    if ($b) {
        echo '$b tem conteúdo';
    }
```  

### Resultado:
$a tem conteúdo

**Observação:** atualmente, se o PHP estiver com o nível de erro NOTICE ligada,
o teste if ($b) emitirá a mensagem de erro "Notice: Undefined variable: b".
A forma mais correta para testar se uma variável está definida é utilizar
a função `if (isset($b))`.

Para realizar testes encadeados, basta colocar um **IF** dentro do outro 
ou utilizar o operador **AND** da seguinte forma:

```php
    <?php 
    $salario = 1020;
    $tempo_servico = 12;
    $tem_reclamacoes = FALSE;
    
    if ($salario > 1000) {
   	    
   	    if ($tempo_servico >= 12) {
   	    	
   	    	if ($tem_reclamacoes != true) {
   	    		echo 'parabéns, você foi promovido<br>' . PHP_EOL;
   	    	}
   	   
   	    }
    
    }


    if (($salario > 1000) and ($tempo_servico >= 12) and ($tem_reclamacoes != true)) {
	    echo 'parabéns, você foi promovido <br>' . PHP_EOL;
    }    
```

**Observação:** quando os exemplos forem executados no ambiente web, é
importante utilizar o marcador `<br>` para quebrar linhas. De outra forma,
quando o PHP for executado pela linha de comando, esse marcador será 
desnecessário.

### Resultado: 

parabéns, você foi promovido
parabéns, você foi promovido

O PHP nos oferece facilidades quando desejamos executar tarefas simples, 
como realizar uma atribuição condicional a uma variável. A seguir você confere
um código tradicional que verifica o estado de uma variável antes de atribuir
o resultado.

```php
    if ($valor_venda > 100) {
   	    $resultado = 'muito caro';
    } 
    else {
    	$resultado = 'pode comprar';
    }
```

O mesmo código poderia ser escrito em uma única linha da seguinte forma:

```php
   $resultado = ($valor_venda > 100) ? 'muito caro' : 'pode comprar';
```   
A primeira expressão é a condição a ser avaliada; a segunda é o valor atribuido
caso esta seja verdadeira; e a terceira é o valor atribuido caso esta seja falsa. 

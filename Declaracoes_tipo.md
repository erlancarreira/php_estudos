# Declarações de tipo

Algumas linguagens de programação exigem que o tipo (int, bool, string) das variáveis seja 
declarado explicitamente. O PHP não requer que você defina explicitamente 
o tipo da variável, pois ele infere o tipo. Inferência é a capacidade do
compilador de saber o tipo do dado sem que este esteja explicitamente
declarado. Quando você declarar uma variável, e em seguida executar um `var_dump()`, 
por exemplo, será possível ver o tipo real da variável, escolhido pelo PHP 
conforme sua utilização:

    <?php 
    $a = 5;
    $b = 'teste';
    var_dump($a, $b);

##### Resultado:
    
    int(5)
    string(5) "teste"

Além disso, o PHP tentará fazer conversões automáticas de tipo sempre que for
possível. Nos exemplos a seguir, usamos o operador de concatenação `(.)` entre string
e integer, e o resultado é uma string (teste5). Em seguida, somamos duas strings
que foram automaticamente convertidas para numérico, resultando em (15).
    
    <?php
    var_dump('teste', . 5);
    var_dump('5' + '10');

##### Resultado: 
    
    string(6) "teste5"
    int(15)

`Quando a conversão de tipos não puder ser feita naturalmente, como em ('5' + 'x'), então uma Warning será emitida: A non-numeric value encountered.`

Em se tratando de parâmetros de funções, podemos especificar opcionalmente
os tipos dos dados recebidos, como no exemplo a seguir, em que adicionamos
o tipo antes do nome do parâmetro (`$peso, $altura`). Nestes casos, o PHP tentará
converter o parâmetro (`$peso, $altura`) sempre que possível para `float`, garantindo
que ele seja daquele tipo. Então, se passarmos valores `float`, `int` ou até mesmo uma
string numérica, garantiremos que o parâmetro dentro da função seja um `float`.
No exemplo a seguir, mesmo passando uma string e um integerm dentro da função, 
eles são recebidos como `float`.
    
    <?php 
    function calcula_imc(float $peso, float $altura) {
    	var_dump($peso, $altura);
    	return $peso / ($altura * $altura);
    } 
    var_dump(calcula_imc('75.1', 2));

##### Resultado: 
    float(75.1)
    float(2)
    float(18.775)


Esta conversão não funciona em todos os casos. No caso de um método que espera
um parâmetro do tipo float, se for passada uma string que não possa ser convertida
para float diretamente, erros poderão ser emitidos. No exemplo a seguir, temos
um número com caracteres alfanuméricos depois. A conversão, neste caso, ainda é
possível, para 75.1, mas um Notice é emitido.

    var_dump(calcula_imc('75.1x',2));

##### Resultado:   

Notice: A non well formed numeric value encountered

Caso venhamos a utilizar um parâmetro que não possa ser convertido para `float`,
como uma string não nmérica, ou um array, então um erro será emitido, como
no exemplo a seguir:
    
    var_dump(calcula_imc('abc123', 2));

##### Resultado:
    Fatal error: Uncaught TypeError: Argument 1 passed to calcular_imc() must be of the
    type float, string given

Além de declarar o tipo do parâmetro, também é possível declarar o seu retorno. 
No caso da função anterior, como ela envolve um cálculo entre duas variáveis do
tipo `float`, o retorno naturalmente será um float. 
Mas podemos forçar o retorno para outro tipo também como um int, ou uma string.
No exemplo a seguir, o retorno está sendo forçado para integer.
     
    <?php 
    function calcula_imc(float $peso, float $altura): int {
        var_dump($peso, $altura);
        return $peso / ($altura * $altura);
    }

    var_dump(calcula_imc(75, 1.85));

##### Resultado: 
    float(75)
    float(1.85)
    int(21)

Contudo, se você declarar um tipo de retorno como array, e internamente a função
retornar um `float`, um erro será lançado, pois a conversão entre esses dois tipos
não é possível:

    <?php 
    function calcula_imc(float $peso, float $altura): array {
        return $peso / ($altura * $altura);
    }

    var_dump(calcula_imc(75, 1.85));

##### Resultado: 
    Fatal error: Uncaught TypeError: Return value of calcula_imc() must be 
    of the type array, float returned
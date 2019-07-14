# Tipagem estrita

O PHP também permite habilitar o modo estrito, ou tipagem estrita. Esta é uma 
configuração executada em âmbito de arquivo  e, quando habilitada, exige que o
tipo de variável passada como parâmetro em tempo de execução seja exatamente
o mesmo tipo declarado. Caso o tipo da variável passada como parâmetro seja
diferente do tipo esperado, um erro do tipo `TypeError` é lançado. Conforme 
a documentação, a execerção à regra é que um valor inteiro pode ser passado 
a uma função que aguarda um `float`.
Para habilitar a tipagem estrita, precisamos usar o `declare()` no início do arquivo,
passado `strict_types=1`. Neste caso, nossa função está declarada para receber dois
parâmetros do tipo `float`. Na primeira chamada, passamos um int e um float, o que
é permitido. Na segunda, passamos uma string '75.1', o que provoca um erro de divergência
de tipagem, conforme apresentado no output.

    <?php
    declare(strict_types=1);

    function calcula_imc(float $float, float $altura): float {
    	var_dump($peso, $altura); 
    	return $peso / ($altura * $altura);
    }

    var_dump(calcula_imc(75, 1.85));
    var_dump(calcula_imc('75.1', 2));

##### Resultado:
    float(75)
    float(1.85)
    float(21.913805697589)
    Fatal error: Uncaught TypeError: Argument 1 passed to calcula_imc() must be of the
    type float, string given

`A cláusula strict é definida no arquivo em que a chamada da função é realizada,
e não no arquivo em que ela é definida. Assim, se tivéssemos dividido a 
execução em dois arquivos, onde um fosse responsável pela definição da função
calcula_imc() e outro pelo require e sua chamada, para que o `strict_types` tivesse
efeito, ele deveria ser definido no arquivo em que a função foi chamada. `    

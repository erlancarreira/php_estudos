# Variáveis Tipos

#### Tipo númerico

Números podem ser especificados em notação decimal (base 10), hexadecimal (base 16) ou octal (base 8), sendo opcionalmente precenditos de sinal.

    <?php 
    $a = 1234;  // número decimal 
    $a = -123;  // um número negativo
    $a = 0123;  // número octal (equivalente a 83 em decimal)
    $a = 0x1A;  // número hexadecimal (equivalente a 26 em decimal)
    $a = 1.234; // ponto flutuante
    $a = 4e23;  // notação científica

#### Tipo string

Uma string é uma cadeia de caracteres alfanúmericos. Para declará-la, podemos usar aspas simples ('') ou aspa duplas (""). Veja com mais detalhes como manipular strings na seção 1.10, "Manipulação de strings".
     
    <?php 
    $variável = 'Isto é um teste';
    $variável = "Isto é um teste";

#### Tipo array

Array é uma lista de valores armazenados na memória que podem ser de tipos
diferentes (números, strings, objetos) e podem ser acessados a qualquer momento, 
pois cada valor é relacionado a uma chave. Um array também pode crescer dinamicamente
com a adição de novo itens. 

    <?php 
    $carros = array('Palio', 'Corsa', 'Gol');
    echo $carros[1]; // resultado = 'Corsa'


#### Tipo objeto

Um objeto é uma entidade com um determinado comportamento definido por seus métodos (suas ações) e suas propriedades (seus dados). Para criar um objeto deve-se utilizar o operador `new`.
Neste exemplo criamos um objeto plano `(stdClass)` e atribuímos algumas propriedades para ele.

    <?php
    $carro = new stdClass;
    $carro->modelo = 'Palio';
    $carro->ano    = 2002;
    $carro->cor    = 'Azul';
    
    print_r($carro);
    print_r $carro->modelo . ' ';
    print_r $carro->ano . ' ';
    print_r $carro->cor . ' ';

##### Resultado
    
    stdClass Object (
        [modelo] => Palio
        [ano]    => 2002
        [cor]    => Azul  
    )

    Palio 2002 Azul


#### Tipo Recurso

Recurso (resource) é uma variável que mantém uma referência de recurso externo.
Recursos são criados e utilizados por funções como aquelas que criam conexões
de banco de dados. Quando as funções `mysql_connect()` e `pg_connect()`, 
por exemplo, são conectadas ao banco de dados, 
retornam uma variável de referência do tipo recurso.
     
    resource mysql_connect ([ string $server [, string $username [, string $password [, bool $new_link [, int $client_flags ]]]]] )
    resource pg_connect ( string $connection_string )

`Observação:` uma variável do tipo recurso não pode ser serializada.

#### Tipo misto

O tipo misto (`mixed`) é uma identificação que representa diversos (não necessariamente todos)
tipos de dados que podem ser usados em um mesmo parâmetro. Um parâmetro do tipo `mixed` indica
que a função aceita diversos tipos de dados como parâmetro. 
Um exemplo é a função `gettype()` que obtém o tipo da variável passada como parâmetro
(que pode ser integer, string, array, objeto, entre outros).
      
    string gettype (mixed  var) 

Veja alguns resultados possíveis:
    
    "boolean"  "integer"  "double"  "string"  "array"  "object"  "resouce"  "NULL"


#### Tipo callback 

Algumas funções como `call_user_func()` aceitam um parâmetro que significa uma 
função a ser executada. Esse tipo de dado é chamado de `callback`. Um parâmetro
`callback` pode ser o nome de uma função representada por uma string ou o método
de um objeto a ser executado representado por um array. Veja os exemplos na
documentação da função `call_user_func()`.

#### Tipo NULL

A utilização de NULL (nulo) significa que a variável não tem valor.




# Variáveis
  
    Com exceção de nomes de classes e funções, o PHP é case sensitive, 
    ou seja, é sensível a letras maiúsculas e minúsculas.
    Tome cuidado ao declarar variáveis. Por exemplo, a variável `$codigo` é tratada de forma 
    totalmente diferente da variável `$Codigo`.
    
    Em alguns casos, precisamos ter em nosso código-fonte nomes de variáveis 
    que podem mudar de acordo com determinada situação. Nesse caso, não só o conteúdo
    da variável é mutável, mas também seu nome. Para isso o PHP implementa o conceito de variáveis
    variantes (variable variable). Sempre que utilizamos dois sinais de cifrão **($$)** 
    precedendo o nome de uma variável, o PHP irá refenciar uma variável 
    representada pelo conteúdo da primeira. Neste exemplo, usamos esse recurso 
    quando declaramos a variável `$nome (conteúdo de $variavel) conteúdo 'maria'`.

        <?php
        //define o nome da variável
        $variavel = 'nome';

        // cria variável identificada pelo conteúdo de $variavel
        $$variavel = 'Maria';

        //Exibi a variável nome na tela
        echo $nome; // 

        resultado 
            Maria    

Quando uma variável é atribuída a outra, é criada uma nova 
área de armazenamento na memória (excerto quando a variável representa um objeto). 
Veja neste exemplo que, apesar de $b receber o mesmo conteúdo de $a, 
após qualquer modificações em $b, $a continua com o mesmo valor.

    <?php 
    
    $a = 5;

    $b = $a;

    $b = 10;

    echo $a;  // resultado = 5

    echo ' '; // espaço

    echo $b;  // resultado = 10 


Para criar referência entre variáveis, ou seja, duas variáveis apontando para a mesma região da memória, 
a atribuição deve ser procedida pelo operador `&`.Assim, 
qualquer alteração em qualquer uma das variáveis reflete na outra.  
    
    <?php 
    
    $a = 5;

    $b = &$a;

    $b = 10;

    echo $a;  // resultado = 5

    echo ' '; // espaço

    echo $b;  // resultado = 10 


Objetos são sempre copiados por referência, independentemente de utilizarmos o operador `&` e na operação de atribuição. Objetos planos podem ser criados no PHP a partir da classe stdClass. Neste exemplo demonstramos que objetos são copiados por refência. Assim, alterações em um objeto implicam alterações em sua réplica.
    
    <?php

    $a = new stdClass;  // cria objeto

    $a->nome = 'Maria'; // define o atributo	
    
    $b = $a; // cria réplica

    $b->nome = 'Joana'; // define atributo

    print $a->nome; // resultado = Joana

    echo ' '; // espaço

    print $b->nome; // resultado = Joana
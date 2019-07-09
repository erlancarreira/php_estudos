* Variáveis
  
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


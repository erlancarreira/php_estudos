# Introducao ao PHP

#### Comentários 
        
Representados por `//, #, /* */`    

Para comentar uma unica linha
    `// echo "Comentario de uma linha";`
    
    `#  echo "Comentario de uma linha";`
        
Para comentar muitas linhas
    `/* echo "Comentario de multiplas linhas";`
    
    `echo "Novo comentario"; */`
Comandos de saida (output)
        
Sao os comandos utilizados para gerar uma saida em tela (output). 
Se o programa PHP for executado na linha de comando (prompt do sistema), 
a saida sera no proprio console. 
No entanto, se o programa for executado via servidor de paginas web (Apache, Nginx), 
a saida sera exibida na propria pagina HTML.

#### echo
            
É um comando que imprime uma ou mais variáveis no console. 
Exemplo: 

    echo 'a' . '<br>' . PHP_EOL;
    echo 'b' . '<br>' . PHP_EOL;  

Utilizamos o separador `'<br>'.PHP_EOL` para formar uma quebra de linha. 

PHP_EOL representa uma quebra de linha (end of line). 

    Ex: '\n'.                       

#### print 
            
É um comando que imprime uma string no console. Exemplo:
            
    print 'abc';

#### var_dump
            
É uma função que imprime o conteúdo de uma variável de forma detalhada, 
muito comum para executar um debug. 
Se o parametro for um objeto, ele imprimira todos os seus atributos; 
se for um array de varias dimensões, imprimirá todas elas, 
com seus respectivos conteúdos e os tipos de dados. 
Exemplo:

    $vetor = array('Palio', 'Gol', 'Fiesta', 'Corsa');

    var_dump($vetor);

#### print_r  
    
É uma função que imprime o conteúdo de uma variável de forma detalhada, 
assim como a `var_dump()`, mas em um formato mais legível para o programador, 
com os conteúdos alinhados e suprimindo os tipos de dados. 
Exemplo:
    
    $vetor = array('Palio', 'Gol', 'Fiesta', 'Corsa')
    
    print_r($vetor);     
                      
# Variáveis
    
Variáveis são identificadoes utilizados para representar valores mutáveis e voláteis 
que só existem durante a execução de um programa. 
São armazenadas na memória RAM, e seu conteúdo é destruído após a execução do programa.
Para criar uma variável em PHP, precisamos atribuir-lhe o nome de identificação, 
sempre precendido pelo caractere cifrão ($). 
    
    Veja os exemplos a seguir:
    
        <?php
            
            $nome      = "João"; 
            $sobrenome = "da Silva";
            echo "$sobrenome, $nome";
            
        Resultado 

            da Silva, João    
        

Algumas dicas: 
    
+ Nunca inicie a nomenclatura de variáveis com números.
+ Nunca utilize espaços em branco no meio do identificador da variável.
+ Nunca utilize caracteres especiais (!@#%^&*/[]{}) na nomenclatura de variáveis.
+ Evite criar variáveis com mais de 15 caracteres em virtude da clareza do código-fonte.
+ Use preferencialmente palavras em letras minúsculas separas por "_" 
ou somente as primeiras letras em maiúsculas quando da ocorrência de mais palavras.
    <?php
        $codigo_cliente // Exemplo de variável
        $codigoCliente  // Exemplo de variável 
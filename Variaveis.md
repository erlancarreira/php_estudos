Variáveis
    
    Variáveis são identificadoes utilizados para representar valores mutáveis e voláteis 
    que so existem durante a execução de um programa. 
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
        
        1. Nunca inicie a nomenclatura de variáveis com números.
        2. Nunca utilize espaços em branco no meio do identificador da variável.
        3. Nunca utilize caracteres especiais (!@#%^&*/[]{}) na nomenclatura de variáveis.
        4. Evite criar variáveis com mais de 15 caracteres em virtude da clareza do código-fonte.
        5. Use preferencialmente palavras em letras minúsculas separas por "_" 
        ou somente as primeiras letras em maiúsculas quando da ocorrência de mais palavras.

        
        <?php
            $codigo_cliente // Exemplo de variável
            $codigoCliente  // Exemplo de variável 
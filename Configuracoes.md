# Configuracoes de ambiente

Locais mais comuns:

#### Pastas utilizadas conforme sistemas operacionais

		Ubuntu: /var/www/html/
		MacOS: /Library/WebServer/Documents/
		Windows: C:\wamp64\www\
    
#### phpinfo.php
        funcao para exibir um relatorio de todas as configuracoes atuais do PHP 
            phpinfo() 
        
        
#### Ativar a exibicao de erros
        display_errors  = On
        error_reporting = E_ALL

#### Ativar o registro de logs de erros 
        log_errors = On
        error_log  = /tmp/php_errors.log

#### Aumentar o limite de memoria em MB e tempo de exercucao maximo de cada script
        memory_limit    = 256M
        max_execution_time = 120

#### Permitir o upload de arquivos e aumentar os limites de upload e envio de formularios
        file_uploads        = On  
        post_max_size       = 100M
        upload_max_filesize = 100M 

#### Aumentar o tempo de uma sessao de usuario  
        session.gc_maxlifetime = 14000                   
        


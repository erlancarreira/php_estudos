<h4>Configuracoes de ambiente<h4>

	<p>Locais mais comuns:</p>

	<p>Pastas utilizadas conforme sistemas operacionais</p>

		<p>Ubuntu: /var/www/html/</p>
		<p>MacOS: /Library/WebServer/Documents/</p>
		<p>Windows: C:\wamp64\www\</p>
    
    <p>phpinfo.php</p>
        <p>funcao para exibir um relatorio de todas as configuracoes atuais do PHP 
            phpinfo()</p> 
        
        
    <p>Ativar a exibicao de erros</p>
        <p>display_errors  = On</p>
        <p>error_reporting = E_ALL</p>

    <p>Ativar o registro de logs de erros</p> 
        <p>log_errors = On</p>
        <p>error_log  = /tmp/php_errors.log</p>

    <p>Aumentar o limite de memoria em MB e tempo de exercucao maximo de cada script</p>
        <p>memory_limit    = 256M<p>
        <p>max_execution_time = 120</p>

    <p>Permitir o upload de arquivos e aumentar os limites de upload e envio de formularios</p>
        <p>file_uploads        = On  </p>
        <p>post_max_size       = 100M</p>
        <p>upload_max_filesize = 100M</p> 

    <p>Aumentar o tempo de uma sessao de usuario</p>  
        <p>session.gc_maxlifetime = 14000</p>                   
        


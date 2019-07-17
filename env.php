<?php
  
  $config = [
    'DB_DRIVER'   => 'mysql',
    'DB_HOST'     => 'lista.iptvcs.eu',
    'DB_USERNAME' => 'root',
    'DB_PASSWORD' => '@Notreve$',
    'DB_NAME'     => 'bd_iptv',
    'DB_PORT'     => '7999',
  ];
 
  foreach ($config as $key => $value) {
    putenv("$key=$value");
  }
?>

<?php

  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'progwebbd';

  $link = mysqli_connect($host, $user, $password, $db);

  if (!$link) {
    die('Falha na conexão com o banco de dados: ' . mysqli_connect_error());
  }

?>
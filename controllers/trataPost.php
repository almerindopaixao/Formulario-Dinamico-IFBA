<?php

  include('./utils/ValidadorDeCpf.php');

  $name = $_POST["name"];
  $cpf = $_POST["cpf"];
  $address = $_POST["address"];

  $state = isset($_POST["state"]) ? $_POST["state"] : '';

  $date = $_POST["date"];
  $sex = $_POST["sex"];

  $movieTheater = isset($_POST["checkMovieTheater"]) ? $_POST["checkMovieTheater"] : '';

  $music =  isset($_POST["checkMusic"]) ? $_POST["checkMusic"] : '';

  $info = isset($_POST["checkInfo"]) ? $_POST["checkInfo"] : '';

  $login = $_POST["login"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];

  $archivo = $_FILES["photo"];

  $fieldsOK = true;

  if ($name == '') {
    $_SESSION['error_name'] = "<small>Informe o nome.</small>";
    $fieldsOK = false;
  }

  if ($login == '') {
    $_SESSION['error_login'] = "<small>Informe o login.</small>";
    $fieldsOK = false;
  }

  if ($state == '') {
    $_SESSION['error_state'] = "<small>Informe o seu estado.</small>";
    $fieldsOK = false;
  }

  if(strtotime($date) == 0  || strtotime($date) >= strtotime("now")) {
    $_SESSION['error_date'] = "<small>Informe uma data válida.</small>";
    $fieldsOK = false;
  }

  if($address == '') {
    $_SESSION['error_address'] = '<small>Informe o endereço.</small>';
    $fieldsOK = false;
  }

  if($password == '' && $password2 == '') {
    $_SESSION['error_passwords'] = '<small>Informe uma senha.</small>';
    $fieldsOK = false;
  }

  if($password != $password2) {
    $_SESSION['error_passwords'] = '<small>As senhas não combinam.</small>';
    $fieldsOK = false;
  }

  $cpfIsValide = CPFIsValid($cpf);

  if ($cpfIsValide == false) {
    $_SESSION['error_cpf'] = '<small>O cpf informado é inválido</small>';
    $fieldsOK = false;
  }

  function checksPhoto(&$fieldsOK) {

    global $archivo;

    if ($archivo['error'] != 0) {
      $fieldsOK = false;
      return '<small>Erro no UPLOAD do arquivo.</small>'; 
    }

    if ($archivo['size'] == 0) {
      $fieldsOK = false;
      return '<small>Erro no arquivo. Tamanho igual a zero.</small>';
    }

    if ($archivo['size'] > 2000000) {
      $fieldsOK = false;
      return '<small>Tamanho maior que o permitido (2 mb).</small>';
    }

    $types = array('image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png', 'image/bmp');

    $flag = false;

    foreach ($types as $type) {
      if ($archivo['type'] == $type) {
        $flag = true;
      } 
    }

    if ($flag == false) {
      $fieldsOK = false;
        return '<small>Erro no arquivo. TIPO não permitido.</small>';
    }

    $destino = './uploads/img/';

    $destino = $destino . $archivo['name'];

    $res = move_uploaded_file($archivo['tmp_name'], $destino);

    if ($res == false) {
      $fieldsOK = false;
      return '<small>Erro ao copiar o arquivo para o destino</small>';
    }

    return '';
  }

  $_SESSION['error_archivo'] = checksPhoto($fieldsOK);

  if ($fieldsOK) {
    header('Location: ./pages/cadCliente.php');
  }

  /*

  $_SESSION['name'] = $name;
  $_SESSION['cpf'] = $cpf;
  $_SESSION['address'] = $address;
  $_SESSION['state'] = $state;
  $_SESSION['date'] = date('d/m/Y', strtotime($date));
  $_SESSION['sex'] = $sex;
  $_SESSION['movieTheater'] = $movieTheater;
  $_SESSION['music'] = $music;
  $_SESSION['info'] = $info;
  $_SESSION['login'] = $login;
  $_SESSION['password'] = $password;
  $_SESSION['archivo'] = $archivo['name'];

  */

?>
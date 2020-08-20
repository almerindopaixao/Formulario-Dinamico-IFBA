<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Almerindo da Paixão Junior">
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/cadCliente.css">
  <title>Cadastro de clientes</title>
</head>
<body>

  <?php 

      include('../utils/validadorDeCpf.php');
      include('../controllers/trataPost.php');

      include('../database/conexao.php');

      $sql = "SELECT * FROM clientes ORDER BY id_cliente DESC";

      $read = mysqli_query($link, $sql);

      echo "<main id='root'>";
      echo "<div class='background'></div>";

      while ($vetor = mysqli_fetch_array($read)) {
        $foto = $vetor['foto'];
        $nome = $vetor['nome'];
        $estado = $vetor['estado_sigla'];
        $cpf = $vetor['cpf'];
        $endereco = $vetor['endereco'];
        $dt_nascimento = date('d/m/Y', strtotime($vetor['dt_nascimento']));
        $sexo = $vetor['sexo'];
        $login = $vetor['login'];
        $senha = $vetor['senha'];
        $cinema = $vetor['cinema'];
        $musica = $vetor['musica'];
        $informatica = $vetor['informatica'];

        include('includes/dadoUsuario.php');
                 
      }

      echo "</main>";

    mysqli_close($link);
  
  ?>
 
</body>
</html>
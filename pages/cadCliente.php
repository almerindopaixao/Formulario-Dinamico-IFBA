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
    session_start();
    session_destroy();

    if (isset($_POST['enviar'])):
      include('../controllers/trataPost.php');
    endif;
  
  ?>
  <main id="root">
    <div class="background">
    </div>
    <div class="container">
      <h1>Os dados informados são:</h1>
      <div class="data">
        <div>
          <span>Foto:</span>
          <span>
          <?php 

            if (isset($_SESSION['archivo'])) {
              echo "<img 
                heigth=100 
                width=100
                src='../uploads/img/" . $_SESSION['archivo'] . "'
                alt='Foto perfil'
                >";
            } else {
              echo "<div class='image-default'><p>Foto perfil</p></div>";
            }
            
          ?>
          </span>
        </div>
        <div>
          <span>Nome:</span>
          <span> 
            <?php 
              echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; 
            ?>    
          </span>
        </div>

        <div>
          <span>CPF:</span>
          <span>
            <?php 
              echo isset($_SESSION['cpf']) ? $_SESSION['cpf'] : ''; 
            ?>  
          </span>
        </div>

        <div>
          <span>Endereço:</span>
          <span>
            <?php 
              echo isset($_SESSION['address']) ? $_SESSION['address'] : ''; 
            ?>  
            </span>
        </div>

        <div>
          <span>Estado:</span>
          <span>
            <?php 
              echo isset($_SESSION['state']) ? $_SESSION['state'] : ''; 
            ?>  
          </span>
        </div>

        <div>
          <span>Data Nasc:</span>
          <span>
            <?php 
              echo isset($_SESSION['date']) ? $_SESSION['date'] : ''; 
            ?>  
          </span>
        </div>

        <div>
          <span>Sexo:</span>
          <span>
            <?php 
              echo isset($_SESSION['sex']) ? $_SESSION['sex'] : ''; 
            ?>  
          </span>
        </div>

        <div>
          <span>Senha:</span>
          <span>
            <?php 
              echo isset($_SESSION['password']) ? $_SESSION['password'] : ''; 
            ?>  
          </span>
        </div>

        <div>
          <span>Áreas de interesse:</span>
          <span>
            <?php
              if (isset($_SESSION['movieTheater'])) {
                if ($_SESSION['movieTheater']) {
                  echo "Cinema <br>";
                }
              }

              if (isset($_SESSION['music'])) {
                if ($_SESSION['music']) {
                  echo "Música <br>";
                }
              }

              if (isset($_SESSION['info'])) {
                if ($_SESSION['info']) {
                  echo 'Informática <br>';
                }
              }
            ?>
          </span>
        </div>

      </div>
    </div>
  </main>
</body>
</html>
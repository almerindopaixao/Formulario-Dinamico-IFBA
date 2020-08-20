<?php
echo "<div class='container'>
          <h1>Os dados informados são:</h1>
          <div class='data'>
            <div>
              <span>Foto:</span>
              <span>
                <img 
                    heigth=100 
                    width=100
                    src='../uploads/img/" . $foto . "'
                    alt='Foto perfil'
                    >
              </span>
            </div>
            <div>
              <span>Nome:</span>
              <span> 
                $nome  
              </span>
            </div>

            <div>
              <span>CPF:</span>
              <span>
                $cpf  
              </span>
            </div>

            <div>
              <span>Endereço:</span>
              <span>
                $endereco 
                </span>
            </div>

            <div>
              <span>Estado:</span>
              <span>
                $estado 
              </span>
            </div>

            <div>
              <span>Data Nasc:</span>
              <span>
                $dt_nascimento  
              </span>
            </div>

            <div>
              <span>Sexo:</span>
              <span>
                $sexo 
              </span>
            </div>

            <div>
              <span>Senha:</span>
              <span>
                $senha 
              </span>
            </div>

            <div>
              <span>Áreas de interesse:</span>
              <span>";
                  if ($cinema) {
                    echo "Cinema <br>";
                  }

                  if ($musica) {
                    echo "Musica <br>";
                  }

                  if ($informatica) {
                    echo "Informática <br>";
                  }

              echo "</span>
            </div>

          </div>
        </div>";
?>
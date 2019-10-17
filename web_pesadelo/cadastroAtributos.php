    <?php
    session_start();

    $autorizado = $_SESSION['autorizado'] ?? false;
    if ($autorizado !== true) {
      header('location: login.php');
      exit();
    }
    ?>
    <!DOCTYPE html>
    <html>
    <link rel="stylesheet" type="text/css" href="style.css" />

    <body>

      <header class="menu">

        <a href="inicio.php">FriendZone</a>
        <nav>

          <li><a href="sair.php">Inicio</a></li>
          <li><a href="#">Entrar</a></li>
          <li><a href="NovoUsuario.php">Cadastrar</a></li>
        </nav>

      </header>



      <section class="form">


        <div class="principal">
          <h2>Nivel de amizade</h2>

          <form action="addParentesco.php" method="post">

            <div class="meio">
              <input type="text" name="parentesco" required=" ">
              <label>Parentesco</label>
            </div>

            <input type="submit" name="" value="salvar">

          </form>

        </div>



      </section>

      <section class="formulario">
        <?php
        $dados = file('parentesco.csv');
        for ($i = 0; $i < sizeof($dados); $i++) {
          $dados[$i] = explode(",", TRIM($dados[$i]));
        }
        ?>



        <table class="tabela">

          <tr>
            <th>Parentesco</th>
          </tr>



          <?php foreach ($dados as $i => $dadosUser) : ?>
            <tr>
              <?php foreach ($dadosUser as  $dados) : ?>


                <td><?= $dados ?></td>

              <?php endforeach ?>
              <td><a id="apg" href="apagarParentes.php?id=<?= $i ?>">X</a></td>
            </tr>
          <?php endforeach ?>
        </table>

      </section>



    </body>

    </html>
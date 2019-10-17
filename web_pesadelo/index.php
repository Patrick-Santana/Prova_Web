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
        <h2>Amigos</h2>

        <form action="addAmigos.php" method="post">

          <div class="meio">
            <input type="text" name="nome" required=" ">
            <label>Primeiro e segundo nome</label>
          </div>


          <div class="meio">
            <input type="text" name="cidade" required=" ">
            <label>Cidade</label>
          </div>

          <div class="meio">
            <input type="number" name="numero" required=" ">
            <label>Numero</label>
          </div>


          <div class="meio">
            <input type="email" name="email" required=" ">
            <label>Email</label>
          </div>



          <input type="submit" name="" value="salvar">

        </form>

      </div>



    </section>

    <section class="formulario">
      <?php
      $dados = file('amigos.csv');
      for ($i = 0; $i < sizeof($dados); $i++) {
        $dados[$i] = explode(",", TRIM($dados[$i]));
      }
      ?>



      <table class="tabela  ">

        <tr>
          <th>Nome</th>
          <th>Cidade</th>
          <th>Numero</th>
          <th>Email</th>
          <th> id</th>
        </tr>



        <?php foreach ($dados as $i => $dadosUser) : ?>
          <?php if ($dadosUser[4] == $_SESSION['cpf']) : ?>
            <tr>
              <?php foreach ($dadosUser as  $dados) : ?>


                <td><?= $dados ?></td>

              <?php endforeach ?>
              <td><a id="apg" href="apagarAmigos.php?id=<?= $i ?>">X</a></td>
            </tr>
          <?php endif ?>
        <?php endforeach ?>
      </table>


    </section>



  </body>

  </html>
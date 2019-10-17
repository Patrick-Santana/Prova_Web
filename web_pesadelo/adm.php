  <!DOCTYPE html>
  <html>
  <link rel="stylesheet" type="text/css" href="style.css" />

  <body>

    <header class="menu">

      <a href="index.php">FriendZone</a>
      <nav>

        <li><a href="sair.php">Inicio</a></li>
        <li><a href="login.php">Entrar</a></li>
        <li><a href="NovoUsuario.php">Cadastrar</a></li>
        <li><a href="adm.php">Administrador</a></li>

      </nav>

    </header>



    <section class="form">



      <div class="principal">
        <h2>Login Adm</h2>

        <form action="verificaradm.php" method="post">

          <div class="meio">
            <input type="text" name="email" required=" ">
            <label>Email</label>
          </div>


          <div class="meio">
            <input type="password" name="senha" required=" ">
            <label>Senha</label>
          </div>




          <input type="submit" name="" value="Entrar">

        </form>

      </div>


    </section>



  </body>

  </html>
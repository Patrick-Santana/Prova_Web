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
                <h2>Usuario</h2>

                <form action="AddUsuario.php" method="post">

                    <div class="meio">
                        <input type="text" name="nome" required=" ">
                        <label>Primeiro e segundo nome</label>
                    </div>


                    <div class="meio">
                        <input type="text" name="cpf" required=" ">
                        <label>Cpf</label>
                    </div>


                    <div class="meio">
                        <input type="email" name="email" required=" ">
                        <label>Email</label>
                    </div>


                    <div class="meio">
                        <input type="password" name="senha" required=" ">
                        <label>Senha</label>
                    </div>




                    <input type="submit" name="" value="salvar">

                </form>

            </div>



        </section>



    </body>

</html>
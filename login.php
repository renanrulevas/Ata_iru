<?php include_once("header.php"); ?>

    <main>
      <section>
        <div class="form-conta">
                <form action="" method="POST" class="">
                    <h1 class="form-color" id="form-color-title">Login</h1>
                    <div class="">
                        <div class="form-icon">
                            <span class="form-color" id=""><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-input" type="text" name="username" placeholder="Digite seu e-mail ou nome de usuário" required autofocus>*
                    </div>
                    <div class="">
                        <div class="form-icon">
                            <span class="form-color" id=""><i class="fas fa-lock"></i></span>
                        </div>
                        <input class="form-input" type="password" name="password" placeholder="Digite sua senha"required>*
                    </div>
                    <div class="form-link">
                      <a href="" class="">Esqueceu a Senha?</a>
                      <a href="" class="">Ainda não sou cadatrado</a>
                    </div>
                    <button class="btn" type="submit">Enviar <i class="fas fa-arrow-alt-circle-right"></i></button>
                </form>
        </div>
      </section>
    </main>
<?php include_once("footer.php"); ?>

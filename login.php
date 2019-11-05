<?php include_once("header.php"); ?>
<main class="container-fluid" id="main-login">
  <section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-md-5">
      <form id="form-container-login">
        <div class="form-group">
          <div class="login-div-icones text-left">
            <label for="login-email">
                <span><i class="fas fa-user"></i></span> E-mail ou usuário *
            </label>
         </div>
         <input type="email" class="form-control" id="login-email" aria-describedby="emailHelp" placeholder="Digite seu usuário ou e-mail" name="login-email">
       </div>
       <div class="form-group">
        <div class="login-div-icones text-left">
          <label for="login-senha">
              <span><i class="fas fa-lock"></i></span> Senha *
         </label>
       </div>
       <input type="password" class="form-control" id="login-senha" placeholder="Digite sua senha" name="login-senha">
     </div>
     <div class="form-group" id="login-links">
       <a href="" class="">Esqueceu a Senha?</a>
       <a href="" class="">Ainda não sou cadatrado</a>
     </div>
     <button type="submit" class="btn btn-primary btn-block" id="botao-login">Enviar</button>
   </form>
 </section>
</section>
</main>
<?php include_once("footer.php"); ?>

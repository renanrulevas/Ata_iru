<?php include_once("header.php"); ?>
    
    <main>
        <div class="row justify-content-center">
            <div class="col-xs-12 col-md-8 col-lg-6">
                <form action="/register" method="POST" class="form-signin">
                    <h1 class="text-center">Cadastrar</h1>
        
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputUsername"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" type="text" name="username" placeholder="Username"
                            aria-describedby="inputUsername" required autofocus>*
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputPassword"><i class="fas fa-lock"></i></span>
                        </div>
                        <input class="form-control" type="password" name="password" placeholder="Password"
                            aria-describedby="inputPassword" required>*
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputName"><i class="fas fa-pencil-alt"></i></span>
                        </div>
                        <input class="form-control" type="text" name="firstName" placeholder="Nome" aria-describedby="inputName"
                            required>
                        <input class="form-control" type="text" name="lastName" placeholder="Sobrenome"
                            aria-describedby="inputName" required>*
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputEmail"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input class="form-control" type="email" name="email" placeholder="email@dominio.com"
                            aria-describedby="inputEmail" required>*
                    </div>
        
                    <button class="btn btn-lg btn-success btn-block" type="submit">Cadastrar <i
                            class="fas fa-arrow-alt-circle-right"></i></button>
                </form>
            </div>
        </div>

    </main>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php include_once("footer.php"); ?>
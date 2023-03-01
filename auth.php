<?php
require_once("globals.php");
require_once("db.php");
require_once("templates/header.php");


?>


<!-- Show password engine -->
<script type="text/javascript">
    function showPassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>



<div id="main-container" class="container-fluid">
    <div class="col-md-12">
        <div class="row" id="auth-row">



            <div class="col-md-4" id="login-container">
                <h2>Entrar</h2>
                <form action="" method="post">
                    <input type="hidden" name="type" value="login">
                    <div class="form-group">
                        <label for="email">E-Mail: </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha: </label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Digite sua senha">
                        <input type="checkbox" onclick="showPassword()">Mostrar Senha
                    </div>
                    <input type="submit" value="Entrar" class="btn card-btn">
                </form>
            </div>




            <div class="col-md-4" id="register-container">
                <h2>Criar Conta</h2>
                <form action="<?= $BASE_URL ?>auth_process.php" method="post">
                    <input type="hidden" name="type" value="register">
                    <div class="form-group">
                        <label for="email">E-Mail: </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail">
                    </div>

                    <div class="form-group">
                        <label for="name">Nome: </label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Digite seu nome">
                    </div>

                    <div class="form-group">
                        <label for="lastname">Sobrenome: </label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Digite seu sobrenome">
                    </div>

                    <div class="form-group">
                        <label for="email">E-Mail: </label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Digite seu e-mail">
                    </div>

                    <div class="form-group">
                        <label for="password">Senha: </label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Digite uma senha">
                    </div>

                    <div class="form-group">
                        <label for="confirmpassword">Confirme sua senha: </label>
                        <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirme sua senha">
                    </div>

                    <input type="submit" value="Registrar" class="btn card-btn">

                </form>
            </div>

        </div>
    </div>
</div>

<?php
require_once("templates/footer.php")
?>
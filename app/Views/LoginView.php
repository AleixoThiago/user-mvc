<div class="login">
    <div class="container">
        <div class="navbar-right" style="padding-right: 15px;">
            <a href="<?= route('/') ?>" class="btn btn-lg btn-info"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
        </div>
        <form class="form-signin" method="POST">
            <h2 class="form-signin-heading">Insira os dados:</h2>
            <label for="inputEmail" class="sr-only">Endereço de E-mail:</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" name="email">
            <label for="inputPassword" class="sr-only">Senha:</label>
            <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha">
            <button class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-log-in"></span> Acessar</button>
            <div style="text-align: center">
                <?= (empty($mensagem) ? '' : $mensagem) ?>
            </div>
        </form>
    </div>
</div>
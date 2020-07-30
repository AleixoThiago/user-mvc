<div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="back" href="<?= route('/') ?>"><img class="brand" alt="Brand" src="<?= asset('img/brand.jpg') ?>"></a>
            </div>
            <div>
                <h2>Criação de Usuário</h2>
            </div>
            <div class="link">
                <p>Criando usuário com: <a href="<?= route('/admin') ?>"><?= $_SESSION['user']['nome_usuario'] ?></a></p>
            </div>
        </div>
    </nav>
</div>
<div class="add">
    <form action="<?= route('/admin') ?>" method="POST">
        <div class="data">
            <div class="form-group">
                <label for="nome">Nome do Usuário:</label>
                <input type="text" class="form-control" id="nome" name="nome_usuario" placeholder="Nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
            </div>
        </div>
        <div style="padding: 20px; display: inline-block;">
            <div class="grid-6 padding-sm">
                <label class="form-label">Nível:</label>
                <select name="nivel" id="nivel" class="form-field">
                    <?php foreach ($niveis as $nivel => $tipo) { ?>
                        <option value="<?= $nivel ?>"><?= $tipo ?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</button>
        </div>
    </form>
</div>
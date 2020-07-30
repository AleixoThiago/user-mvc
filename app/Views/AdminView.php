<div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="back" href="<?= route('/') ?>"><img class="brand" alt="Brand" src="<?= asset('img/brand.jpg') ?>"></a>
            </div>
            <div>
                <h2>Página do Administrador</h2>
            </div>
            <div class="link">
                <p>Olá <?= $_SESSION['user']['nome_usuario'] ?></p>
            </div>
        </div>
    </nav>
</div>
<div>
    <a class="btn btn-primary" href="<?= route('/admin/criar') ?>"><span class="glyphicon glyphicon-user"></span> Adicionar</a>
    <div class="painel">
        <h3>Usuários do Sistema</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Nível</th>
                    <th>Status</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($usuarios as $key => $user) { ?>
                <tr>
                    <td><?= $user['id_usuario'] ?></td>
                    <td><?= $user['nome_usuario'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['nivel'] ?></td>
                    <td>
                        <?php 
                            $status = "";
                            if($user['flag_status'] == 1) {
                                $status = "Ativo";
                            } else {
                                $status = "Inativo";
                            };
                            echo $status;
                        ?>
                    </td>
                    <td style="display: inline-flex;">
                        <a style="margin-right: 5px;" href="<?= route("/admin/{$user['id_usuario']}") ?>" class="btn btn-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        <form action="<?= route("/admin/{$user['id_usuario']}") ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span></button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
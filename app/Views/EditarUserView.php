<div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="back" href="<?= route('/') ?>"><img class="brand" alt="Brand" src="<?= asset('img/brand.jpg') ?>"></a>
            </div>
            <div>
                <h2>Edição de Usuário</h2>
            </div>
            <div class="link">
                <p>Admin: <a href="<?= route('/admin') ?>"><?= $_SESSION['user']['nome_usuario'] ?></a></p>
            </div>
        </div>
    </nav>
</div>

<span class="warn"><?= $_SESSION['user']['nome_usuario'] ?> está alterando os dados do usuário <?= $usuario['nome_usuario'] ?></span>

<div class="container edit">
	<form action="<?= route("/admin/{$usuario['id_usuario']}") ?>" method="POST">
		<input type="hidden" name="_method" value="PUT">
			<div class="form-group">
				<label for="nome" class="form-label">Nome:</label>
				<input class="form-field" type="text" id="nome" name="nome_usuario" value="<?= $usuario['nome_usuario'] ?>" required>
			</div>
			<div class="">
				<label for="email" class="form-label">E-mail:</label>
				<input class="form-field" type="email" id="email" name="email" value="<?= $usuario['email'] ?>">
			</div>
			<br>
			<div class="form-group">
				<label for="nivel" class="form-label">Nivel:</label>
				<select name="nivel" id="nivel" class="form-field">
				<?php foreach ($niveis as $nivel => $tipo) { ?>
					<option value="<?= $nivel ?>" <?= $usuario['nivel'] == $nivel ? 'selected' : '' ?>><?= $tipo ?></option>
				<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="senha" class="form-label">Senha:</label>
				<input class="form-field" type="password" id="senha" name="senha" required>
			</div>
			<div class="form-group">
				<label class="form-label">Usuário ativo?</label>
				<input class="form-label" type="checkbox" value="1" name="flag_status" 
					<?= $usuario['flag_status'] ? 'checked' : '' ?>>
			</div>					
			<div class="form-group">
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"></span> Atualizar</button>
			</div>
	</form>
</div>
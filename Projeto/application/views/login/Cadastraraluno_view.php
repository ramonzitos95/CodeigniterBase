<div class="container-fluid" xmlns="http://www.w3.org/1999/html">
    <div class="row-fluid">
        <?php echo validation_errors(); ?>
        <h2>Cadastro de Alunos</h2>
        <form action="<?php echo base_url('Login/ValidaCadastro'); ?>" method="post">
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="usuario" class="form-control">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control">
            </div>
            <div class="form-group">
                <label>Data de Cadastro</label>
                <input type="date" name="datacadastro" class="form-control" value="<?php echo date('y-m-s')?>">
            </div>

            <input type="submit" value="Cadastrar" class="btn btn-default">

        </form>
    </div>
    <div>
        <a href="<?php echo base_url('Login'); ?>" class="alert-dismissable">Logout</a>
    </div>
</div>
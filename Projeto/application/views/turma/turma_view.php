<?php $this->load->view('uteis/cabecalho'); ?>
<div class="container-fluid" xmlns="http://www.w3.org/1999/html">
    <div class="row-fluid">
        <h2>Cadastro de Turma</h2>
        <form action="<?php echo base_url('Turma/validaTurma'); ?>" method="post">
            <div class="form-group">
                <label>Nome da Turma</label>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <input type="submit" value="Cadastrar" class="btn btn-default">

        </form>
    </div>
    <div>
        <a href="<?php echo base_url('Login'); ?>" class="alert-dismissable">Logout</a>
    </div>
</div>

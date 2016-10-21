<?php
    $this->load->view('login/menu_view');
?>

<div class="container-fluid" xmlns="http://www.w3.org/1999/html">

    <div class="row-fluid">
        <?php echo validation_errors(); ?>
        <h2>Cadastro de Disciplinas</h2>
        <form action="<?php echo base_url('Disciplina/validaDisciplina'); ?>" method="post">
            <div class="form-group">
                <label>Nome Disciplina</label>
                <input type="text" name="nome" class="form-control">
            </div>
            <div class="form-group">
                <label>Professor</label>
                <input type="text" name="professor" class="form-control">
            </div>
            <div class="form-group">
                <label>Carga horária</label>
                <input type="text" name="cargahoraria" class="form-control">
            </div>
            <div class="form-group">
                <label>Data de Cadastro</label>
                <input type="text" name="datacadastro" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <label>Conceito</label>
                <textarea class="form-control" name="conceito"></textarea>
            </div>

            <div class="form-group">
                <label>Ementa</label>
                <input type="text" name="ementa" class="form-control">
            </div>
            <div class="form-group">
                <label>Data de Inicio</label>
                <input type="date" name="datainicio" class="form-control">
            </div>
            <div class="form-group">
                <label>Situação</label><br>
                <label>Ativo</label>
                <input type="radio" name="situacao" value="ativo">
                <label>Inativo</label>
                <input type="radio" name="situacao" value="inativo">
            </div>
            <div class="form-group">
                <label>Universidade</label>
                <input type="text" name="universidade" class="form-control">
            </div>
            <div class="form-group">
                <label>Modalidade</label>
                <input type="text" name="modalidade" class="form-control">
            </div>
            <div class="">
                <input type="submit" value="Cadastrar" class="btn btn-default">
            </div>
        </form>
        <div class="col-md-6">
            <a href="<?php echo base_url('Login'); ?>" class="alert-link">Logout</a>
        </div>
    </div>

</div>

<?php $this->load->view('uteis/rodape')?>
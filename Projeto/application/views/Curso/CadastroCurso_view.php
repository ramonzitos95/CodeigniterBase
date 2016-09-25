<?php $this->load->view('uteis/cabecalho'); ?>
<div class="container-fluid" >
    <div class="row-fluid">
        <?php echo validation_errors(); ?>
        <h2>Cadastro de Cursos</h2>
        <form action="<?php echo base_url('Curso/validaCurso'); ?>" method="post">
            <div class="form-group col-md-12">
                <label>Nome do Curso</label><br>
                <input type="text" name="cursonome" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <label>Carga Horária</label><br>
                <input type="text" name="cargahoraria" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label>Ementa</label><br>
                <textarea class="form-control" name="ementa"></textarea>
            </div>
            <div class="form-group col-md-4">
                <label>Bibliografia</label><br>
                <textarea class="form-control" name="bibliografia"></textarea>
            </div>
            <div class="form-group col-md-12">
                <label>Modo Curso</label><br>
                <label>Presencial</label>
                <input type="radio" name="modocurso" value="presencial">
                <label>Distância</label>
                <input type="radio" name="modocurso" value="distancia">
            </div>
            <div class="form-group col-md-6">
                <label>Origem Curso</label><br>
                <input type="text" name="origem" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Situação do Curso</label><br>
                <select>
                    <option name="situacao" value="1">Ativo</option>
                    <option name="situacao" value="0">Inativo</option>
                </select>
            </div>

            <div class="col-md-12">
                <input type="submit" value="Cadastrar" class="btn btn-default">
            </div>
        </form>
    </div>

</div>
<?php $this->load->view('uteis/rodape'); ?>
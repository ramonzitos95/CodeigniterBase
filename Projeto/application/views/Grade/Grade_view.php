<?php
    $this->load->view('uteis/cabecalho');
    $arrayCurso = $this->Curso_model->listaCursos();
    $arrayDisciplina = $this->Curso_model->listaDisciplinas();

?>
    <div class="container-fluid" >
        <div class="row-fluid">
            <?php echo validation_errors(); ?>
            <h2>Cadastro de Grades</h2>
            <form action="<?php echo base_url('Curso/validaCurso'); ?>" method="post">
                <div class="form-group col-md-12">
                    <label>Código da Grade</label><br>
                    <input type="text" name="gradeid" class="form-control" required>
                </div>

                <div class="form-group col-md-6">
                    <label>Curso</label>
                    <select name="curso">
                        <?php foreach ($arrayCurso as $key): ?>
                            <?php echo "<option value=\"$key\" >$key[cursonome]</option>"; ?>
                        <?php endforeach; ?>
                    </select>
                </div>

                <input class="form-control" type="hidden" name="pessoa" value="<?$this->session->userdata("id")?>"/>

                <div class="form-group">
                    <label for="semestreano">Semestre ou Ano</label>
                    <input type="text" name="semestreano" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label>Carga Horária</label><br>
                    <input type="number" name="origem" class="form-control">
                </div><br>

                <div class="form-group col-md-12">
                    <label>Dia da Semana</label>
                    <select name="diasemana">
                        <option value="Domingo">Domindo</option>
                        <option value="Segunda-Feira">Segunda</option>
                        <option value="Terça-Feira">Terça</option>
                        <option value="Quarta-Feira">Quarta</option>
                        <option value="Quinta-Feira">Quinta</option>
                        <option value="Sexta-Feira">Sexta</option>
                        <option value="sabado">sábado</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label>Disciplina</label>
                    <select name="disciplina">
                        <?php foreach ($arrayDisciplina as $key => $value): ?>
                            <?php echo "<option value=\"$key\" >$value</option>"; ?>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="datavalidade">Data de Validade</label>
                    <input type="date" name="datavalidade" value="inativo">
                </div>

                <div class="col-md-12">
                    <input type="submit" value="Cadastrar" class="btn btn-default">
                </div>
            </form>
        </div>

    </div>
<?php $this->load->view('uteis/rodape'); ?>
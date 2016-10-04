<?php $this->load->view('uteis/cabecalho');
    $arrayTurma = $this->Turma_model->listaTurmas();
?>

<div class="container-fluid" xmlns="http://www.w3.org/1999/html">

    <div class="row-fluid">
        <?php echo validation_errors(); ?>
        <h2>Cadastro de Pessoas</h2>
        <form action="<?php echo base_url('Pessoa/cadastro'); ?>" method="post">
            <div class="form-group col-md-6">
                <label>Turma</label>
                <select name="turma">
                    <?php foreach ($arrayTurma as $key => $value): ?>
                        <?php echo "<option value=\"$key\" >$value</option>"; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>CPF</label>
                <input type="text" name="cpf" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>RG</label>
                <input type="text" name="rg" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Endereço</label>
                <input type="text" name="endereco" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Cidade</label>
                <input type="text" name="Cidade" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Bairro</label>
                <input type="text" name="bairro" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Estado</label>
                <input type="text" name="estado" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Telefone</label>
                <input type="tel" name="telefone" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Celular</label>
                <input type="tel" name="celular" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>CEP</label>
                <input type="text" name="cep" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label>Estado Civil</label> <br>
                <label>Solteiro</label>
                <input type="radio" name="estadocivil" class="radio-inline" value="solteiro">
                <label>Casado</label>
                <input type="radio" name="estadocivil" class="radio-inline" value="casado">
                <label>Divorciado</label>
                <input type="radio" name="estadocivil" class="radio-inline" value="divorciado">
                <label>Viúva</label>
                <input type="radio" name="estadocivil" class="radio-inline" value="viuva">
            </div>
            <div class="form-group col-md-4">
                <label>Data de Nascimento</label>
                <input type="date" name="datanascimento" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label>Grau de Escolaridade</label>
                <input type="text" name="grauescolar" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Disciplina Extra</label>
                <input type="text" name="extra" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Naturalidade</label>
                <input type="text" name="naturalidade" class="form-control">
            </div>
            <div class="form-group col-md-8">
                <label>Nº Matricula</label>
                <input type="text" name="matricula" class="form-control">
            </div>
            <div class="col-md-6 ">
                <input type="submit" value="Cadastrar" class="btn btn-default">
            </div>
        </form>
        <div class="col-md-6">
            <a href="<?php echo base_url('Login'); ?>" class="alert-link">Logout</a>
        </div>
    </div>

</div>
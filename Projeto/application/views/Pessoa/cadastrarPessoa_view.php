<?php $this->load->view('uteis/cabecalho'); ?>
<div class="container-fluid" xmlns="http://www.w3.org/1999/html">
    <div class="row-fluid">
        <?php echo validation_errors(); ?>
        <h2>Cadastro de Alunos</h2>
        <form action="<?php echo base_url('Login/ValidaCadastro'); ?>" method="post">
            <div class="form-group">
                <label>Turma</label>
                <input type="text" name="turma" class="form-control">
            </div>
            <div class="form-group">
                <label>Nome</label>
                <input type="password" name="nome" class="form-control">
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="cpf" class="form-control">
            </div>
            <div class="form-group">
                <label>RG</label>
                <input type="text" name="rg" class="form-control">
            </div>
            <div class="form-group">
                <label>Endereço</label>
                <input type="text" name="endereco" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Cidade</label>
                <input type="text" name="Cidade" class="form-control">
            </div>
            <div class="form-group">
                <label>Bairro</label>
                <input type="text" name="bairro" class="form-control">
            </div>
            <div class="form-group">
                <label>Estado</label>
                <input type="text" name="estado" class="form-control">
            </div>
            <div class="form-group">
                <label>Telefone</label>
                <input type="tel" name="telefone" class="form-control">
            </div>
            <div class="form-group">
                <label>Celular</label>
                <input type="tel" name="celular" class="form-control">
            </div>
            <div class="form-group">
                <label>CEP</label>
                <input type="text" name="cep" class="form-control">
            </div>
            <div class="form-group">
                <label>Estado Civil</label>
                <label>Solteiro</label>
                <input type="radio" name="estadocivil" class="form-control" value="sol"><br>
                <label>Casado</label>
                <input type="checkbox" name="estadocivil" class="form-control" value="cas"><br>
                <label>Divorciado</label>
                <input type="checkbox" name="estadocivil" class="form-control" value="div"><br>
                <label>Viúva</label>
                <input type="checkbox" name="estadocivil" class="form-control" value="viu"><br>
            </div>
            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="text" name="datanascimento" class="form-control">
            </div>
            <div class="form-group">
                <label>Grau de Escolaridade</label>
                <input type="text" name="grauescolar" class="form-control">
            </div>
            <div class="form-group">
                <label>Disciplina Extra</label>
                <input type="text" name="extra" class="form-control">
            </div>
            <div class="form-group">
                <label>Naturalidade</label>
                <input type="text" name="naturalidade" class="form-control">
            </div>
            <div class="form-group">
                <label>Nº Matricula</label>
                <input type="text" name="matricula" class="form-control">
            </div>
            <input type="submit" value="Cadastrar" class="btn btn-default">

        </form>
    </div>
    <div>
        <a href="<?php echo base_url('Login'); ?>" class="alert-dismissable">Logout</a>
    </div>
</div>
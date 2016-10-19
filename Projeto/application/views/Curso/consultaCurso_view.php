<?php
    $this->load->view('uteis/cabecalho');
    $this->load->view('login/menu_unico');
?>

<div class="container-fluid">
    <h3>Buscar Cursos:</h3>
    <div class="form-inline form-group">
        <label>Buscar por: </label>
        <select id="atributo" class="form-control" name="atributo" required>
            <option value="id">Id</option>
            <option value="nome">Nome</option>

        </select>
        <input id="valorEve" type="text" class="form-control" name="valorEve"/>
        <button class="btn btn-primary" name="btn" onclick="carregarConsulta(); ">Consultar</button>
    </div>
</div>
<div class="row-fluid">
    <div id="div1">


        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr class="cabecalho">
                    <th colspan="1">Curso</th>
                    <th colspan="1">Carga Horaria</th>
                    <th colspan="1">Modo do Cuso</th>
                    <th colspan="1">Origem</th>
                    <th colspan="1">Situaçao</th>
                    <th colspan="1"></th>
                    <th colspan="1"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($cursos as $curso) {
                    If($curso->situacao == true){
                        $txtSituacao = "Ativo";
                    } else {
                        $txtSituacao = "Inativo";
                    }
                    ?>
                <tr>
                    <td colspan="1"><?php echo $curso->cursonome; ?></td>
                        <td colspan="1"><?php echo $curso->cargahoraria; ?></td>
                        <td colspan="1"><?php echo $curso->modocurso; ?></td>
                        <td colspan="1"><?php echo $curso->origemcurso; ?></td>
                        <td colspan="1"><?php echo $txtSituacao ?></td>
                    <td colspan="1"><form action="editarCurso.php" method="POST">
                            <input type="hidden" value="' . $id . '" name="id">
                            <input class="btn btn-default" type="submit" value="Editar Curso">
                        </form>
                        <td colspan="1">
                            <a href="<?php echo base_url('Curso/DeletarCurso/'. $curso->cursoid); ?>" class="btn btn-large btn-primary">Excluir Curso</a>
                        </td>
                </tr>
                <?php } ?>
        </tbody></table>
        </div>


    </div>
</div>

<script>
    function carregarConsulta() {
        $.post("../../controller/consultas/ConsultaAjaxCurso.php",
            {
                atributo: document.getElementById('atributo').value,
                valor: document.getElementById('valorEve').value,
            },
            function (data) {
                $("#div1").html(data);
            });
    }
    ;

</script>

<?php $this->load->view('uteis/rodape'); ?>
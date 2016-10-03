<div class="row">
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
<div class="row">
    <div id="div1"></div>
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
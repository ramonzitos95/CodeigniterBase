/**
 * Created by Usuario on 01/11/2016.
 */
$(document).ready(function () {
    $("#form").submit(function (event){
        event.preventDefault();

        var cursonome = document.getElementById("cursonome").value;
        var cargahoraria = document.getElementById("cargahoraria").value;
        var ementa = document.getElementById("ementa").value;
        var bibliografia = document.getElementById("bibliografia").value;
        var origem = document.getElementsByName("origem").value;
        var situacao = document.getElementsByName("situacao").value;
        var errors = "";

        if(cursonome == ""){
            errors += "<h3>Erros:</h3><p>Nome do curso esta vazio.</p>";
        }
        if(cargahoraria == 0){
            errors += "<p>Carga Horária deve ser maior que zero.</p>";
        } else if(cargahoraria != parseInt(cargahoraria)) {
            errors += "<p>Favor informar um valor inteiro para a carga horária.</p>";
        }
        if(ementa == ""){
            errors += "<p>Favor informe a ementa</p>";
        }
        if(origem == ""){
            document.getElementById("origem").value = "Uniasselvi";
        }
        if(bibliografia == ""){
            errors += "<p>Informar a bibliografia.</p>";
        }
        if(situacao == ""){
            errors += "<p>Marcar uma situação.</p>";
        }
        if(errors != ""){
            document.getElementById("erros").innerHTML = errors;
            $("#erros").fadeIn(1000);
            setTimeout(function(){
                $("#erros").fadeOut(1000);
            }, 5000);
            return false;
        }else{
            $(this).submit();
        }



    });
});

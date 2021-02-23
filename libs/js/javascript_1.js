function cliqueAjax() {
    $('form').submit(function () {
        var dados = $(this).serialize();
        $.ajax({
            url: '../pages/coeficientes.php',
            type: 'post',
            dataType: 'html',
            data: dados,
            beforeSend: function () {
                //Aqui adicionas o loader
                $("#coeficientes_medios").html(
                        "<center><img src='../img/carregando.gif' style='width: 10%'><br><h5>Carregando...</h5></center>");
            },
            success: function (data) {
                $('#coeficientes_medios').empty().html(data);
            }
        });
        return false;
    });
    $('form').trigger('submit');
}


function padraoBaixo(valor1, valor2, valor3, id_valor, id) {
    console.log('id: ' + id);
    console.log('valor1: ' + valor1);
    var data = '<div id="' + id + '">\n\
<button type="button" class="btn btn-dark" name="padrao_baixo" id="padrao_baixo" style="width: 32%" onclick="padraoBaixo(' + valor1 + ',' + valor2 + ', ' + valor3 + ', ' + id_valor + ', ' + id + ');">Padrão baixo<br/>(C = ' + valor1 + ')</button>\n\
<button type="button" class="btn btn-light" name="padrao_medio" id="padrao_medio" style="width: 32% "onclick="padraoMedio(' + valor1 + ',' + valor2 + ', ' + valor3 + ', ' + id_valor + ', ' + id + ');">Padrão médio<br/>(C = ' + valor2 + ')</button>\n\
<button type="button" class="btn btn-light" name="padrao_alto" id="padrao_alto" style="width: 32% "onclick="padraoAlto(' + valor1 + ',' + valor2 + ', ' + valor3 + ', ' + id_valor + ', ' + id + ');">Padrão alto<br/>(C = ' + valor3 + ')</button>\n\
</div>';
    var dados = $(this).serialize();
    $.ajax({
        url: '../pages/coeficientes.php',
        type: 'post',
        method: 'html',
        data: dados,
        beforeSend: function () {
            //Aqui adicionas o loader
            $(id).html(
                    "<center><img src='../img/carregando.gif' style='width: 10%'><br><h5>Carregando...</h5></center>");
        },
        success: function () {
            $('#' + id).empty().html(data);
        }
    });

    document.getElementById(id_valor).value = valor1;

}
function padraoMedio(valor1, valor2, valor3, id_valor, id) {

    console.log('id: ' + id);
    console.log('valor1: ' + valor1);
    var data = '<div id="' + id + '">\n\
<button type="button" class="btn btn-light" name="padrao_baixo" id="padrao_baixo" style="width: 32%" onclick="padraoBaixo(' + valor1 + ',' + valor2 + ', ' + valor3 + ', ' + id_valor + ', ' + id + ');">Padrão baixo<br/>(C = ' + valor1 + ')</button>\n\
<button type="button" class="btn btn-dark" name="padrao_medio" id="padrao_medio" style="width: 32% "onclick="padraoMedio(' + valor1 + ',' + valor2 + ', ' + valor3 + ', ' + id_valor + ', ' + id + ');">Padrão médio<br/>(C = ' + valor2 + ')</button>\n\
<button type="button" class="btn btn-light" name="padrao_alto" id="padrao_alto" style="width: 32% "onclick="padraoAlto(' + valor1 + ',' + valor2 + ', ' + valor3 + ', ' + id_valor + ', ' + id + ');">Padrão alto<br/>(C = ' + valor3 + ')</button>\n\
</div>';
    var dados = $(this).serialize();
    $.ajax({
        url: '../pages/coeficientes.php',
        type: 'post',
        method: 'html',
        data: dados,
        beforeSend: function () {
            //Aqui adicionas o loader
            $(id).html(
                    "<center><img src='../img/carregando.gif' style='width: 10%'><br><h5>Carregando...</h5></center>");
        },
        success: function () {
            $('#' + id).empty().html(data);
        }
    });

    document.getElementById(id_valor).value = valor2;

}
function padraoAlto(valor1, valor2, valor3, id_valor, id) {

    console.log('id: ' + id);
    console.log('valor1: ' + valor1);
    var data = '<div id="' + id + '">\n\
<button type="button" class="btn btn-light" name="padrao_baixo" id="padrao_baixo" style="width: 32%" onclick="padraoBaixo(' + valor1 + ',' + valor2 + ', ' + valor3 + ', ' + id_valor + ', ' + id + ');">Padrão baixo<br/>(C = ' + valor1 + ')</button>\n\
<button type="button" class="btn btn-light" name="padrao_medio" id="padrao_medio" style="width: 32% "onclick="padraoMedio(' + valor1 + ',' + valor2 + ', ' + valor3 + ', ' + id_valor + ', ' + id + ');">Padrão médio<br/>(C = ' + valor2 + ')</button>\n\
<button type="button" class="btn btn-dark" name="padrao_alto" id="padrao_alto" style="width: 32% "onclick="padraoAlto(' + valor1 + ',' + valor2 + ', ' + valor3 + ', ' + id_valor + ', ' + id + ');">Padrão alto<br/>(C = ' + valor3 + ')</button>\n\
</div>';
    var dados = $(this).serialize();
    $.ajax({
        url: '../pages/coeficientes.php',
        type: 'post',
        method: 'html',
        data: dados,
        beforeSend: function () {
            //Aqui adicionas o loader
            $(id).html(
                    "<center><img src='../img/carregando.gif' style='width: 10%'><br><h5>Carregando...</h5></center>");
        },
        success: function () {
            $('#' + id).empty().html(data);
        }
    });

    document.getElementById(id_valor).value = valor3;


}

//function cliqueAjax() {
//    $('form').submit(function () {
//        var dados = $(this).serialize();
//        $.ajax({
//            url: '../pages/coeficientes.php',
//            type: 'post',
//            dataType: 'html',
//            data: dados,
//            beforeSend: function () {
//                //Aqui adicionas o loader
//                $("#coeficientes_medios").html(
//                        "<center><img src='../img/carregando.gif' style='width: 10%'><br><h5>Carregando...</h5></center>");
//            },
//            success: function (data) {
//                $('#coeficientes_medios').empty().html(data);
//            }
//        });
//        return false;
//    });
//    $('form').trigger('submit');
//}

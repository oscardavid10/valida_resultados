<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet"></link>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>

    

    <title>Document</title>
</head>
<body>
<form autocomplete="off" action="" id = 'form_buscar_orden' class="form-horizontal" onsubmit=" return false">
  <div class="mb-3">
    <label for="id" class="form-label">Ingresa tu ID</label>
        <a class="btn btn-light" data-toggle="popover-hover" data-img="image/id.jpg" data-original-title="" title="">
            <b>?</b>
        </a>
    <input type="text" class="form-control" id="id" maxlength="12" required>
    <!-- <div id="idHelp" class="form-text">Lo puedes encontrar en tu ticket como ID</div> -->
  </div>
  <div class="mb-3">
    <label for="cr" class="form-label">Ingresa tu CR</label>
    <a class="btn btn-light" data-toggle="popover-hover" data-img="image/cr.jpg" data-original-title="" title="">
            <b>?</b>
        </a>
    <input type="text" class="form-control" id="cr" maxlength="6" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</body>

<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$('[data-toggle="popover-hover"]').popover({
  html: true,
  trigger: 'hover',
  placement: 'bottom',
  content: function () { return '<img src="' + $(this).data('img') + '" />'; }
});


$(document).on('submit', '#form_buscar_orden', function() {

//     $("#cargar_informacion_cuenta_iva").html("<div class='d-flex justify-content-center'>\
//   <div class='spinner-border' role='status'>\
//     <span class='sr-only'>Loading...</span>\
//   </div>\
// </div>");

        var id = $("#id").val();
        var cr = $("#cr").val();
//     var empresa = $("#empresa_cuenta_iva").val();
//     var tipo = $('input:radio[name=customRadioInline1]:checked').val();

$(location).attr('href',"https://omnilab.nojoch.cloud/index.php?id="+id+"&cr="+cr); 
    // $.ajax({
    //         url: "https://omnilab.nojoch.cloud/index.php?id="+id+"&cr="+cr,
    //         type: "GET",
    //         // data: {
    //         //     "ejercicio" : ejercicio,
    //         //     "periodo" : periodo,
    //         //     "empresa" : empresa,
    //         //     "tipo" : tipo
    //         // },
    //         success: function(datas) {
    //               $("#cargar_informacion_cuenta_iva").html(datas);
    //             }
    //         });

    return false;
});

</script>

</html>


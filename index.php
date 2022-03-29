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
    <input type="text" class="form-control" id="id" aria-describedby="ID">
    <!-- <div id="idHelp" class="form-text">Lo puedes encontrar en tu ticket como ID</div> -->
  </div>
  <div class="mb-3">
    <label for="cr" class="form-label">Ingresa tu CR</label>
    <a class="btn btn-light" data-toggle="popover-hover" data-img="image/cr.jpg" data-original-title="" title="">
            <b>?</b>
        </a>
    <input type="text" class="form-control" id="cr">
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
</script>

</html>


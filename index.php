<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet"></link>

    <script src="js/jquery-3.5.1.js"></script>

    <title>Document</title>
</head>
<body>
<form >
  <div class="mb-3">
    <label for="id" class="form-label">Ingresa tu ID</label>
    <a data-toggle="tooltip" title="<img src='image/id.jpg' />">
        <i class="icon-shopping-cart"></i>
    </a>
    <input type="text" class="form-control" id="id" aria-describedby="ID">
    <!-- <div id="idHelp" class="form-text">Lo puedes encontrar en tu ticket como ID</div> -->
  </div>
  <div class="mb-3">
    <label for="cr" class="form-label">Ingresa tu CR</label>
    <input type="text" class="form-control" id="cr">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<script>
    $('a[data-toggle="tooltip"]').tooltip({
    animated: 'fade',
    placement: 'bottom',
    html: true
});
</script>
</body>
</html>


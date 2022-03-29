<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>
</html>


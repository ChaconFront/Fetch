<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
<div class="row">

<div class="col-1 col-sm-1 col-md-4 col-lg-4"  ></div>
<div class="col-10 col-sm-10 col-md-4 col-lg-4">
<br><br><br><br>

<form method="POST" id="formulario" action="">
<h1 class="text-center"><strong>Login</strong></h1>
<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required maxlength="10" minlength="4">
<br>
<input type="password" class="form-control" id="password" name="password" placeholder="password" required maxlength="10" minlength="3">
<br>
<button type="submit">Ingresar</button>
</form>

</div>
<div class="col-1 col-sm-1 col-md-4 col-lg-4"></div>


</div>

<script src="js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
 
</html>
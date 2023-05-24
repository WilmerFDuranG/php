<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap/bootstrap.min.js" defer></script>
    <script src="controllers/formulario.js" defer></script>
    <title>Document</title>
</head>
<body>
<form class="row g-3 formulario">
    <h1>Registro de Factura</h1>
    <div class="col-6">
    <label for="inputAddress" class="form-label">Vendedor</label>
    <input type="text" class="form-control" placeholder="entidad vendedora" >
  </div>

  <div class="col-md-3">
    <label for="inputEmail4" class="form-label">Número de factura</label>
    <input type="number" class="form-control" placeholder="numero">
  </div>
  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">Fecha de factura</label>
    <input type="date" class="form-control" placeholder="fecha">
  </div>
 
  <div class="col-md-2">
    <label for="inputEmail4" class="form-label">NIT/CC cliente</label>
    <input type="number" class="form-control" placeholder="Id cliente">
  </div>
  <div class="col-7">
    <label for="inputAddress2" class="form-label">Nombre</label>
    <input type="text" class="form-control"  placeholder="Nombre del cliente">
  </div>
  <div class="col-md-2">
    <label for="inputCity" class="form-label">Teléfono de cotacto</label>
    <input type="tex" class="form-control" placeholder="numero cotacto">
  </div>
  <div class="col-3">
 
 </div>
  <div class="col-md-3">
    <label for="inputCity" class="form-label">Direccion </label>
    <input type="tex" class="form-control" placeholder="Direccion cliente">
  </div>
 
  <div class="col-md-4">
    <label for="inputZip" class="form-label">Email</label>
    <input type="text" class="form-control" placeholder="Correo eléctronico">
  </div>
  <div class="col-12">
  </div>
</form>
<br>
    <h3>Detalle de factura</h3>

<div class=" d-grid gap-2">
  <button class="btn btn-success" type="button" id="mostrarFormulario">Agregar</button>
  </div>
  <br>
  <div class="formulario1">
  <form class="row g-3 formulario">
    <div class="col-2">
    <label for="inputAddress" class="form-label">codigo producto</label>
    <input type="number" class="form-control">
  </div>

  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">Nombre</label>
    <input type="tex" class="form-control" >
  </div>
 
  <div class="col-md-2">
    <label for="inputEmail4" class="form-label">Valor</label>
    <input type="number" class="form-control" >
  </div>
  <div class="col-2">
    <label for="inputAddress2" class="form-label">Cantidad</label>
    <input type="text" class="form-control"  placeholder="Nombre del cliente">
  </div>
  <div class="col-md-2">
    <label for="inputCity" class="form-label">Total</label>
    <input type="tex" class="form-control" >
  </div>
  <div class="d-grid gap-2 d-md-block">
  <button class="btn btn-dark" type="button">+</button>
  <button class="btn btn-danger" type="button">-</button>
  </div>
  <div class="col-12">
  </div>
</form>
</div>
</body>
</html>
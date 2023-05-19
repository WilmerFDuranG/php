<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<form action="ejercicio.php" method="GET">
    <h1>DATOS DEL CANDIDATO</h1>
    <div class="container">
<div id="reg" style="display: display;">
<div class="card">
<h5 class="card-header">REGISTRO</h5>
<div class="card-body">
<div class="container">
<div class="row g-3">
<div class="col-12">
<form id = "frmData">
<div class="row g-3">
<div class="col-4">
<label for="createdAt" class="form-label">NOMBRES</label>
<input type="tex" class="form-control" placeholder="Ingrese el nombre" name="nombre">
</div>
<div class="col-4">
<label for="nombres" class="form-label">APELLIDOS</label>
<input type="text" class="form-control" placeholder="Ingrese el apellido" name="apellido">
</div>
<div class="col-4">
<label for="email" class="form-label">EMAIL</label>
<input type="email" class="form-control" placeholder="Ingrese el email" name="email">
</div>
</div>
<div class="row g-3">
<div class="col-4">
<label for="telefono" class="form-label">TELÉFONO</label>
<input type="number" class="form-control" placeholder="ingrese el teléfono" name="numero">
</div>
<div class="col-md-3">
    <label for="validationCustom04" class="form-label">NIVEL DE ESTUDIO</label>
    <select class="form-select" id="validationCustom04" required name="estudios">
    <option value="bachiller">Bachiller</option>
        <option value="tecnico">Técnico</option>
        <option value="tecnologo">Técnologo</option>
        <option value="profesional">Profesional</option>
        <option value="universitario">Estudiante universitario</option>
    </select>
</div>
<div class="col-md-3">
    <label for="validationCustom04" class="form-label">NIVEL DE INGLES</label>
    <select class="form-select" id="validationCustom04" required name="ingles">
        <option value="basico">basico</option>
        <option value="intermedio">intermedio</option>
        <option value="avanzado">avanzado</option>
    </select>

</div>

<div class="col-md-12" style="justify-content:center">
    <h2>Conocimientos: </h2>
        <label>
            <input type="checkbox" name="conocimientos[]" value="python">Python
        </label>
        <label>
            <input type="checkbox" name="conocimientos[]" value="html">Html
        </label>
        <label>
            <input type="checkbox" name="conocimientos[]" value="js">Js
        </label>
        <label>
            <input type="checkbox" name="conocimientos[]" value="css">Css
        </label>
        <label>
            <input type="checkbox" name="conocimientos[]" value="php">Php
        </label>
        <label>
            <input type="checkbox" name="conocimientos[]" value="nodejs">NodeJs
        </label>
        <label>
            <input type="checkbox" name="conocimientos[]" value="c#">C#
        </label>
        <label>
            <input type="checkbox" name="conocimientos[]" value="typescript">typescript
        </label>
        <br>
        <button type="submit" class="btn btn-primary">Registrar</button>
        <button type="reset" class="btn btn-danger">Limpiar</button>
</div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
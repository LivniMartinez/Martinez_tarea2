<!DOCTYPE html>
<html lang="es">
<head>
  <title>TAREA_2 Manipulación del DOM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h1 id="tituloPagina" class="text-primary fw-bold">FORMULARIO DE INGRESO</h1>
  <form id="formulario"> 
  <div class="mb-3 mt-3">
      <label for="identificador">Identificador:</label>
      <input type="number" class="form-control" id="id" placeholder="Ingrese su codigo identificador" name="id">
  </div>
  <div class="mb-3 mt-3">
      <label for="name">Nombres:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingrese sus Nombres" name="name">
  </div>
    <div class="mb-3 mt-3">
      <label for="clases">Clases:</label>
      <input type="text" class="form-control" id="clases" placeholder="Ingrese clases" name="clases">
    </div>
   
    <button type="submit" class="btn btn-primary" id="botonClick">Ingresar</button>
  </form>
</div>

<p id="parrafo1" class="text-danger">Para más información puede ingresar en el siguiente enlace.</p>
<a href="https://www.google.com">Ir a google</a>
<script src="script.js" ></script>
</body>
</html>

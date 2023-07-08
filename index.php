<!DOCTYPE html>
<html lang="en">
<head>
  <title>TAREA 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>FORMULARIO</h2>
  <form id="formulario"> 
  <div class="mb-3 mt-3">
      <label for="id">Identificador:</label>
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
   
    <button type="submit" class="btn btn-primary">Ingresar</button>
  </form>
</div>
<script src="script.js" ></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>TAREA_2 Manipulación del DOM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <!-- formulario -->
    <h1>Formulario</h1>
    <!-- el id del formulario y el id de los input sirve para reconocerlos en js -->
    <form id="form" class="border p-4 bg-light">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="id" class="form-label">ID</label>
          <input type="number" class="form-control" id="id" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="materia" class="form-label">Nombre de la Materia</label>
          <input type="text" class="form-control" id="materia" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="descripcion" class="form-label">Descripción</label>
          <textarea class="form-control" id="descripcion" rows="3" required></textarea>
        </div>
      </div>
    </form>
    <button type="button" id="enviar" class="btn btn-primary mt-3">Enviar</button>
    
    <button type="button" id="borrar" class="btn btn-secondary mt-3">Resetear</button>
    
    <div id="result" style="display: none;">
      
      <table class="table table-striped mt-3 table-bordered">
        <thead class="bg-dark text-white">
          <tr>
         
            <th>ID</th>
            <th>Nombre</th>
            <th>Nombre Materia</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody id="tableBody"></tbody>
      </table>
<!-- en la etiqueta p con  es donde se va almacenar el parrafo -->
      <p id="parrafo" class="lead border p-3 bg-primary"></p>
    </div>
  </div>
<p id="parrafo1" class="text-danger">Para más información puede ingresar en el siguiente enlace.</p>
<a href="https://www.google.com">Ir a google</a>

<p id="parrafo2" class="text-danger">Siguenos en redes sociales.</p>
<a href="https://www.facebook.com">Ir a facebook</a>
<a href="https://www.instagram.com">Ir a Instagram</a>

<script src="script.js" ></script>
</body>
</html>

// OBTENER ELEMENTOS DEL DOM

//enviar y borrar son los botones se declaran como una variable y se mandan a traer con el id

var enviar = document.getElementById("enviar");
var borrar = document.getElementById("borrar");

//variables  de los div
var resultDiv = document.getElementById("result");

//declaramos el cuerpo de la tabla 
var tableBody = document.getElementById("tableBody");

//declaramos el parrafo  
var parrafo = document.getElementById("parrafo");

//formulario completo
var form = document.getElementById("form")

enviar.addEventListener("click", function() {
    var id = document.getElementById("id").value;
    var nombre = document.getElementById("nombre").value;
    var materia = document.getElementById("materia").value;
    var descripcion = document.getElementById("descripcion").value;
  
    console.log("ID: " + id);
    console.log("Nombre: " + nombre);
    console.log("Nombre Materia: " + materia);
    console.log("Descripción: " + descripcion);
  
    var newRow = document.createElement("tr");
    newRow.innerHTML = "<td>" + id + "</td><td>" + nombre + "</td><td>" + materia + "</td><td>" + descripcion + "</td>";
    tableBody.appendChild(newRow);
  
    resultDiv.style.display = "block";
    parrafo.innerText = "Es un gusto presentar al estudiante con número " + id + ", de la clase su nombre es " + nombre + " y está inscrito en la materia " + materia + ". Su pensamiento acerca de esta materia es el siguiente: " + descripcion;
  
    document.getElementById("id").value = "";
    document.getElementById("nombre").value = "";
    document.getElementById("materia").value = "";
    document.getElementById("descripcion").value = "";
  
    // Imprimir nodos padres e hijos
    console.log("Nodo padre del formulario:", form.parentNode);
    var hijos = tableBody.childNodes;
    console.log("Nodos hijos del tableBody:");
    for (var i = 0; i < hijos.length; i++) {
      console.log(hijos[i]);
    }
    
  });
  
  //Borra el evento
  borrar.addEventListener("click", function() {
    form.reset();
    resultDiv.style.display = "none";
    parrafo.innerText="";
  });

//Con Selectores
let enlace = document.querySelector('a');
let formulario = document.querySelector('formulario')
let texto = document.querySelectorAll('.container')
let enlaceGoogle = document.querySelector('a[href*="google"]')


let enlacesSeguros = document.querySelectorAll('a[href^="https"]')
console.log(enlaceGoogle)
console.log(enlacesSeguros)

let cajaParrafos = document.getElementById('parrafo1')



window.onload = iniciar;

function iniciar() {
document.getElementById("enviar").addEventListener('click',validar,
  false);


}
function validaNombre() {
  var elemento = document.getElementById("nombre");
  if (!elemento.checkValidity())
  {
    error(elemento);
    alert("Ponga nombre necio")
  }
  return true;

}
function validaCantidad() {
  var elemento = document.getElementsByName("cantidad");
  if (!elemento.checkValidity())
  {
    error(elemento);
    alert("Ponga nombre necio")
  }
  return true;
}

function validaFecha() {
  var elemento = document.getElementById("fecha");
  if (!elemento.checkValidity())
  {
    error(elemento);
  }
  return true
}

function validaLista() {
var elemento = document.getElementsByName("state").selectedIndex;
  if( indice == null || indice == 0 ) {
    return true;
  }


}
function validar(e) {
  if (validaNombre() && validaCantidad() && validaFecha() && validaLista() &&
  confirm("pulsa enviar "))
  {
    return true;
  }else
  {
    e.preventDefault();
    return false;
  }
}

function error(elemento) {
  document.getElementsByName("mensajeError").innerHTML =
    elemento.validationMessage;
  elemento.className="error";
  elemento.focus();

}

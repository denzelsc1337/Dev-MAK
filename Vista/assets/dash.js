// function linker(link) {
//   var iframe = document.getElementById("paginas");

//   if (!iframe) {
//     console.error("El iframe con ID 'paginas' no existe.");
//     return;
//   }

//   iframe.onload = function () {
//     // La página dentro del iframe ha cargado completamente
//     // Puedes mostrar el iframe o hacer cualquier otra acción aquí
//     iframe.style.display = "block";
//   };

//   // Oculta el iframe mientras se está cargando la nueva página
//   iframe.style.display = "none";

//   // Establece la URL del iframe para cargar la nueva página
//   iframe.src = link;
// }

function linker(link) {
  document.getElementById("paginas").src = link;
}

// -----------------------
// -----------------------

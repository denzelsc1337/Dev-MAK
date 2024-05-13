// const sections = document.querySelectorAll(".section");

// sections.forEach((section) => {
//   if (!section.classList.contains("active")) {
//     section.classList.add("hide");
//   }
// });

// -------------------
// -------------------

// const navItems = document.querySelectorAll(".nav-item[data-target]");

// console.log(navItems);

// navItems.forEach((element) => {
//   element.addEventListener("click", () => {
//     var attr = element.getAttribute("data-target");
//     var url = "views/" + attr + ".php";
//     console.log(attr);
//     console.log(url);
//     document.getElementById("paginas").src = url;
//   });
// });

// const boton = document.getElementById("miBoton");

// boton.addEventListener("click", function () {
//   const url = "URL_DEL_IFRAME_QUE_DESEAS_CARGAR";
//   document.getElementById("paginas").src = url;
// });

// document.querySelector("#addProp").addEventListener("click", () => {
//   const sectionToActivate = document.querySelector(
//     '.section[data-target="new_property"]'
//   );
//   const activeSection = document.querySelector(".section.active");

//   if (sectionToActivate) {
//     if (activeSection) {
//       activeSection.classList.remove("active");
//       activeSection.classList.add("hide");
//     }
//     sectionToActivate.classList.remove("hide");
//     sectionToActivate.classList.add("active");
//   }
// });
function linker(link) {
  var iframe = document.getElementById("paginas");

  iframe.onload = function () {
    // La página dentro del iframe ha cargado completamente
    // Puedes mostrar el iframe o hacer cualquier otra acción aquí
    iframe.style.display = "block";
  };

  // Oculta el iframe mientras se está cargando la nueva página
  iframe.style.display = "none";

  // Establece la URL del iframe para cargar la nueva página
  iframe.src = link;
}

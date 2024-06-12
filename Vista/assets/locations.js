document.addEventListener("DOMContentLoaded", function () {
  fetch("./../vendor/departamentos.json")
    .then((response) => response.json())
    .then((departamentos) => {
      const cboDepartamentos = document.querySelector("#depa_prop");
      cboDepartamentos.innerHTML = "";

      const opcionPorDefecto = document.createElement("option");
      opcionPorDefecto.text = "Seleccione un departamento";
      opcionPorDefecto.value = "";
      cboDepartamentos.appendChild(opcionPorDefecto);

      departamentos.forEach((departamento) => {
        const opcion = document.createElement("option");
        opcion.value = departamento.id;
        opcion.text = departamento.nombre;
        cboDepartamentos.appendChild(opcion);
      });
    })
    .catch((error) => console.error("Error al cargar el JSON:", error));
});

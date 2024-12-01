// Este es un ejemplo de datos. Puedes obtener los datos de tu base de datos o de cualquier otra fuente.
var data = [
  ["Nombre", "Edad", "Correo"],
  ["Juan", 30, "juan@example.com"],
  ["María", 25, "maria@example.com"],
  ["Carlos", 35, "carlos@example.com"],
];

document.getElementById("exportButton").addEventListener("click", function () {
  // Crea un nuevo libro de Excel
  var wb = XLSX.utils.book_new();

  // Crea una hoja de trabajo y agrega los datos
  var ws = XLSX.utils.aoa_to_sheet(data);
  XLSX.utils.book_append_sheet(wb, ws, "Datos");

  // Convierte el libro de Excel en un archivo binario y descarga
  var blob = XLSX.write(wb, { bookType: "xlsx", type: "blob" });
  var url = URL.createObjectURL(blob);
  var a = document.createElement("a");
  a.href = url;
  a.download = "datos.xlsx";
  a.click();
  URL.revokeObjectURL(url);
});

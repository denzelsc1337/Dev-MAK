(() => {
  var sections = document.querySelectorAll(".section");
  var section_Array = [];

  sections.forEach((element) => {
    section_Array.push(element.getAttribute("id"));
  });

  var tipoInmueble = document.querySelector("#tipo_prop");
  var whatTI;

  tipoInmueble.addEventListener("change", () => {
    whatTI = tipoInmueble.value;
  });

  const buttonNextPag = document.querySelector(".nextPag");

  buttonNextPag.addEventListener("click", function () {
    if (section_Array.includes(whatTI)) {
      const section = document.getElementById(whatTI);
      const inputs = section.querySelectorAll("input");
      const selects = section.querySelectorAll("select");

      const buttonSigPag = section.querySelector(".sigPag");

      buttonSigPag.addEventListener("click", function () {
        // inputs de los formularios
        var inputsID = [];
        // selects de los formularios
        var selectsID = [];
        // valores de las etiquetas de los formularios
        var tagsValue = [];
        // valores string de los cbo de los formularios
        var tagsText = [];
        // all
        var arrayIDs = [];
        var arrayValues = [];

        inputs.forEach((element) => {
          // inputsID.push(element.getAttribute("id"));
          arrayIDs.push(element.getAttribute("id"));
          // console.log(element.value);
          if (element.value.trim() === "") {
            // tagsValue.push("");
            arrayValues.push("");
          } else {
            // tagsValue.push(element.value);
            arrayValues.push(element.value);
          }
        });

        //
        var selectSections;
        var selectText;
        selects.forEach(function (select) {
          // selectsID.push(select.getAttribute("id"));
          arrayIDs.push(select.getAttribute("id"));
          var selectOptions = select.options;
          var selectedOption = selectOptions[select.selectedIndex];
          if (selectedOption) {
            // tagsText.push(selectedOption.text);
            arrayValues.push(selectedOption.text);
          } else {
            // tagsText.push("");
            arrayValues.push("");
          }
        });
        console.log(arrayIDs);
        console.log(arrayValues);
        const cards = document.querySelectorAll(".card-body");

        cards.forEach((element) => {
          var dataResume = element.classList.contains("data-resume");

          if (dataResume === true) {
            const allTag = element.querySelectorAll("*");
            var resume;
            allTag.forEach((element) => {
              resume = element.getAttribute("data-resume");
              // console.log(resume);
              if (resume !== null) {
                var resumeForm = "";

                for (let index = 0; index < arrayIDs.length; index++) {
                  var valor1 = arrayIDs[index];
                  var valor2 = arrayValues[index];

                  var contenidoExplicit =
                    "<strong>" + valor1 + ": </strong>" + valor2 + "." + "<br>";

                  resumeForm += contenidoExplicit;
                }

                element.innerHTML = resumeForm;
                // element.innerHTML = inputSections + ": " + inputValue;
                // element.innerHTML += selectSections + ": " + selectText;
              }
            });
          }
        });
      });
    }
  });
})();

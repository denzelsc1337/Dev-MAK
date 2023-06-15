(() => {
  // inputs checkbox de los formularios
  var inputsID_chk = [];
  // inputs number de los formularios
  var inputsID_num = [];
  // selects de los formularios
  var selectsID = [];
  // all
  var arrayNames = [];
  var arrayValues = [];
  //
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
      const inputs_chk = section.querySelectorAll("input[type='checkbox']");
      const inputs_num = section.querySelectorAll("input[type='number']");
      const selects = section.querySelectorAll("select");
      const titles = section.querySelectorAll("label");

      ///
      const cardPrimary = section.querySelectorAll(".card.card-primary");
      //
      cardPrimary.forEach((element) => {
        //
        const cardBodys = element.querySelectorAll(".card-body");
        //
        cardBodys.forEach((element) => {
          const lbl = element.querySelectorAll("label");
          lbl.forEach((label) => {
            arrayNames.push(label.textContent);
          });
        });
      });
      ///
      // console.log(titles);
      //
      inputs_chk.forEach((element) => {
        // console.log(element);
        inputsID_chk.push(element.getAttribute("id"));
      });
      // ------
      inputs_num.forEach((element) => {
        inputsID_num.push(element.getAttribute("id"));
      });
      //
      selects.forEach((element) => {
        selectsID.push(element.getAttribute("id"));
      });

      // -----
      const buttonSigPag = section.querySelector(".sigPag");
      buttonSigPag.addEventListener("click", function () {
        cardPrimary.forEach((card) => {
          //
          const cardBodys = card.querySelectorAll(".card-body");
          //
          cardBodys.forEach((element) => {
            const input = element.querySelectorAll("input");
            input.forEach((ele) => {
              // console.log(ele.value);
              arrayValues.push(ele.value);
            });
            // console.log("---");
            //
            const select = element.querySelectorAll("select");
            select.forEach((ele) => {
              //console.log(ele);
              //console.log(ele.textContent);
              const value_ = ele.value;
              const textValue_ = ele.options[ele.selectedIndex].innerText;
              //console.log(textValue_);
              arrayValues.push(textValue_);
            });
            // console.log("---");
          });
        });

        //
        console.log(arrayNames);
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

                for (let index = 0; index < arrayNames.length; index++) {
                  var valor1 = arrayNames[index];
                  var valor2 = arrayValues[index];

                  var contenidoExplicit =
                    "<li><strong>" + valor1 + " </strong>";

                  if (valor2 === "true") {
                    resumeForm += contenidoExplicit + "Sí." + "<br></li>";
                  } else if (
                    valor2 !== "false" &&
                    valor2 !== "" &&
                    valor2 !== 0 &&
                    valor2 !== "-1" &&
                    valor2 !== "on" &&
                    valor2 !== "Seleccione"
                  ) {
                    resumeForm +=
                      contenidoExplicit + valor2 + "." + "<br></li>";
                  }
                }
                element.innerHTML = resumeForm;
              }
            });
          }
        });
      });

      // true or false in chks
      inputsID_chk.forEach(function (checkboxID) {
        var checkbox = document.getElementById(checkboxID);
        checkbox.addEventListener("change", function () {
          if (this.checked) {
            this.value = "true";
          } else {
            this.value = "false";
          }
        });
      });
      // true or false in chks
    }
  });

  const buttonAtrPag = document.querySelector(".atrPag");

  buttonAtrPag.addEventListener("click", function () {
    arrayValues.splice(0);
  });
})();

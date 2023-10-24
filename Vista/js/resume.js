(() => {
  // inputs checkbox de los formularios
  var inputsID_chk = [];
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

      if (section.getAttribute("id") === "5") {
        arrayNames.splice(0);
        arrayValues.splice(0);
        const sub_tipo_prop = document.querySelector("#sub_tipo_prop").value;

        if (sub_tipo_prop === "13" || sub_tipo_prop === "14") {
          const locales = section.querySelectorAll(".lcl");

          locales.forEach((element) => {
            if (element.classList.contains("show")) {
              const inputs_chk_lcl = element.querySelectorAll(
                "input[type='checkbox']"
              );
              inputs_chk_lcl.forEach((element) => {
                inputsID_chk.push(element.getAttribute("id"));
              });

              // true or false in chks
              inputsID_chk.forEach(function (checkboxID) {
                var checkbox_lcl = document.getElementById(checkboxID);
                checkbox_lcl.addEventListener("change", function () {
                  if (this.checked) {
                    this.value = "true";
                  } else {
                    this.value = "false";
                  }
                });
              });
              // true or false in chks

              const buttonSigPag = section.querySelector(".sigPag");

              buttonSigPag.addEventListener("click", function () {
                arrayNames.splice(0);
                arrayValues.splice(0);
                const cardPrimary = element.querySelectorAll(".card");

                cardPrimary.forEach((card) => {
                  //
                  const cardBodys = card.querySelectorAll(".card-body");
                  cardBodys.forEach((element) => {
                    const lbl = element.querySelectorAll("label");
                    lbl.forEach((label) => {
                      arrayNames.push(label.textContent);
                    });
                  });
                  //
                  cardBodys.forEach((element) => {
                    const input = element.querySelectorAll(
                      "input:not([hidden])"
                    );
                    input.forEach((ele) => {
                      arrayValues.push(ele.value);
                    });
                    //
                    const select = element.querySelectorAll("select");
                    select.forEach((ele) => {
                      const textValue_ =
                        ele.options[ele.selectedIndex].innerText;
                      arrayValues.push(textValue_);
                    });
                  });
                });

                // console.log(arrayNames);
                // console.log(arrayValues);
              });
            }
          });
        }
      } else {
        ///
        const inputs_chk = section.querySelectorAll("input[type='checkbox']");
        //
        inputs_chk.forEach((element) => {
          inputsID_chk.push(element.getAttribute("id"));
        });
        //
        // true or false in chks
        inputsID_chk.forEach(function (checkboxID) {
          var checkbox = document.getElementById(checkboxID);
          // console.log(checkbox);
          checkbox.addEventListener("change", function () {
            let chk_c_1 = document.querySelector("#sala_");
            let chk_c_2 = document.querySelector("#comedor_");
            let chk_d_1 = document.querySelector("#sala_d");
            let chk_d_2 = document.querySelector("#comedor_d");

            if (this.checked) {
              this.value = "true";
              // ----

              if (checkbox.id === "sala_com") {
                chk_c_1.disabled = true;
                chk_c_2.disabled = true;
              }

              if (checkbox.id === "sala_com_d") {
                chk_d_1.disabled = true;
                chk_d_2.disabled = true;
              }
              // ----
            } else {
              this.value = "false";

              if (checkbox.id === "sala_com") {
                chk_c_1.disabled = false;
                chk_c_2.disabled = false;
              }

              if (checkbox.id === "sala_com_d") {
                chk_d_1.disabled = false;
                chk_d_2.disabled = false;
              }
            }
          });
        });
        // true or false in chks
        ///

        const buttonSigPag = section.querySelector(".sigPag");

        buttonSigPag.addEventListener("click", function () {
          arrayNames.splice(0);
          arrayValues.splice(0);
          const cardPrimary = section.querySelectorAll(".card");

          cardPrimary.forEach((card) => {
            //
            const cardBodys = card.querySelectorAll(".card-body");
            cardBodys.forEach((element) => {
              const lbl = element.querySelectorAll("label");
              lbl.forEach((label) => {
                arrayNames.push(label.textContent);
              });
            });
            //
            cardBodys.forEach((element) => {
              const input = element.querySelectorAll("input:not([hidden])");
              input.forEach((ele) => {
                arrayValues.push(ele.value);
              });
              //
              const select = element.querySelectorAll("select");
              select.forEach((ele) => {
                const textValue_ = ele.options[ele.selectedIndex].innerText;
                arrayValues.push(textValue_);
              });
            });
          });

          // console.log(arrayNames);
          // console.log(arrayValues);
        });
      }
    }
  });

  const buttonLstPag = document.querySelector(".lstPag");

  buttonLstPag.addEventListener("click", function () {
    const contFotos = document.getElementById("fileValorArchives"),
      cantFotos = contFotos.children.length,
      verFotos = document.getElementById("verFotos_");

    const contDocs_pu = document.querySelector(".archives_pu"),
      cantDocs_pu = contDocs_pu.children.length;

    const contDocs_cl = document.querySelector(".archives_cl"),
      cantDocs_cl = contDocs_cl.children.length;

    const verDocs = document.getElementById("verDocs_");

    if (cantFotos > 1) {
      verFotos.disabled = false;
    } else {
      verFotos.disabled = true;
    }

    if (cantDocs_pu > 0 || cantDocs_cl > 0) {
      verDocs.disabled = false;
    } else {
      verDocs.disabled = true;
    }

    const modal = document.getElementById("verDocs");
    const modalContentDocuments = modal.querySelector(".showDocuments");
    const PU_docs = modalContentDocuments.querySelector(".PU_docs");
    const CL_docs = modalContentDocuments.querySelector(".CL_docs");

    if (cantDocs_pu > 0) {
      PU_docs.style.display = "block";
    } else {
      PU_docs.style.display = "none";
    }

    if (cantDocs_cl > 0) {
      CL_docs.style.display = "block";
    } else {
      CL_docs.style.display = "none";
    }

    const cards = document.querySelectorAll(".card-body");

    cards.forEach((element) => {
      // console.log(element);
      var dataResume = element.classList.contains("data-resume");
      // console.log(dataResume);

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

              var contenidoExplicit = "<li><strong>" + valor1 + " </strong>";

              if (valor2 === "true") {
                resumeForm += contenidoExplicit + "Sí." + "<br></li>";
              } else if (
                valor2 !== "false" &&
                valor2 !== "" &&
                valor2 !== 0 &&
                valor2 !== "-1" &&
                valor2 !== "on" &&
                valor2 !== "Seleccione" &&
                valor2 !== "undefined" &&
                valor2 !== undefined
              ) {
                resumeForm += contenidoExplicit + valor2 + "." + "<br></li>";
              }
            }
            element.innerHTML = resumeForm;

            // Crear un objeto JSON para almacenar los datos
            const jsonData = {};

            // Divide el texto en líneas
            const lines = resumeForm.split("<br></li>");

            // Recorre las líneas para extraer los datos
            lines.forEach((line) => {
              const keyValue = line.match(/<strong>([^<]+)<\/strong>([^<]+)/);
              if (keyValue && keyValue.length === 3) {
                const key = keyValue[1].trim();
                const value = keyValue[2].trim();
                jsonData[key] = value;
              }
            });

            // Convierte el objeto JSON en una cadena JSON
            const jsonString = JSON.stringify(jsonData);

            console.log(jsonString);

            localStorage.setItem("jsonString", JSON.stringify(jsonString));
          }
        });
      }
    });

    var comment = document.querySelector("#coment_valr").value;
    document.getElementById("coment_valr_").textContent = comment;
  });

  const buttonAtrPag = document.querySelector(".atrPag");

  buttonAtrPag.addEventListener("click", function () {
    arrayNames.splice(0);
    arrayValues.splice(0);
  });

  const buttonBckPag = document
    .querySelectorAll(".backPag")
    .forEach((element) => {
      element.addEventListener("click", function () {
        // arrayNames.splice(0);
        // arrayValues.splice(0);
        // borrar checkbox de local comercial   => local exclusivo / local comun
        inputsID_chk.forEach(function (checkboxID) {
          var checkboxs = document.getElementById(checkboxID);
          for (var i = 0; i < inputsID_chk.length; i++) {
            checkboxs.value = false;
          }
        });
        // borrar checkbox de local comercial   => local exclusivo / local comun

        // borrar inputs de local comercial   => local exclusivo / local comun
        InputsErase();
        // borrar inputs de local comercial   => local exclusivo / local comun
      });
    });

  function InputsErase() {
    const allSections = document.querySelectorAll(".section.card-default");
    // const allSections_ = document.querySelectorAll((".section"));
    allSections.forEach((element) => {
      const allInputsTxt = element.querySelectorAll("input:not([hidden])");
      const allInputsNum = element.querySelectorAll("input[type='number']");
      const allCheckBox = element.querySelectorAll(
        "input[type='checkbox']:checked"
      );

      // const allInputsTxt = document.querySelectorAll("input:not([hidden])");
      // const allInputsNum = document.querySelectorAll("input[type='number']");
      // const allCheckBox = document.querySelectorAll("input[type='checkbox']:checked");
      // console.log(allSections);
      // console.log(allSections_);
      // console.log(allInputsTxt);

      for (var i = 0; i < allInputsTxt.length; i++) {
        allInputsTxt[i].value = "";
        allInputsTxt[i].disabled = false;
      }

      for (var i = 0; i < allInputsNum.length; i++) {
        allInputsNum[i].value = "";
      }

      for (var i = 0; i < allCheckBox.length; i++) {
        allCheckBox[i].checked = false;
      }
    });
  }
})();

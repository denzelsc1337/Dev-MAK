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

          locales.forEach(element => {
            if (element.classList.contains("show")) {
              const inputs_chk_lcl = element.querySelectorAll("input[type='checkbox']");
              inputs_chk_lcl.forEach(element => {

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
              })
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
            if (this.checked) {
              this.value = "true";
            } else {
              this.value = "false";
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
        })

      }


      // const buttonSigPag = section.querySelector(".sigPag");

      // buttonSigPag.addEventListener("click", function () {
      //   arrayNames.splice(0);
      //   arrayValues.splice(0);
      //   const cardPrimary = section.querySelectorAll(".card");

      //   cardPrimary.forEach((card) => {
      //     //
      //     const cardBodys = card.querySelectorAll(".card-body");
      //     cardBodys.forEach((element) => {
      //       const lbl = element.querySelectorAll("label");
      //       lbl.forEach((label) => {
      //         arrayNames.push(label.textContent);
      //       });
      //     });
      //     //
      //     cardBodys.forEach((element) => {
      //       const input = element.querySelectorAll("input");
      //       input.forEach((ele) => {
      //         arrayValues.push(ele.value);
      //       });
      //       //
      //       const select = element.querySelectorAll("select");
      //       select.forEach((ele) => {

      //         const textValue_ = ele.options[ele.selectedIndex].innerText;
      //         arrayValues.push(textValue_);
      //       });
      //     });
      //   });

      //   console.log(arrayNames);
      //   console.log(arrayValues);
      // })

    }
  });



  const buttonLstPag = document.querySelector(".lstPag");

  buttonLstPag.addEventListener("click", function () {
    const cards = document.querySelectorAll(".card-body");
    // console.log(cards);

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
                valor2 !== "Seleccione" &&
                valor2 !== "undefined" &&
                valor2 !== undefined
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


    var comment = document.querySelector("#coment_valr").value;
    document.getElementById("coment_valr_").textContent = comment;
  });



  const buttonAtrPag = document.querySelector(".atrPag");


  buttonAtrPag.addEventListener("click", function () {
    arrayNames.splice(0);
    arrayValues.splice(0);
  });

  const buttonBckPag = document.querySelectorAll(".backPag").forEach(element => {
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
    const allInputsTxt = document.querySelectorAll("input:not([hidden])");
    const allInputsNum = document.querySelectorAll("input[type='number']");
    const allCheckBox = document.querySelectorAll("input[type='checkbox']:checked");


    for (var i = 0; i < allInputsTxt.length; i++) {
      allInputsTxt[i].value = "";
    }

    for (var i = 0; i < allInputsNum.length; i++) {
      allInputsNum[i].value = "";
    }

    for (var i = 0; i < allCheckBox.length; i++) {
      allCheckBox[i].checked = false;
    }
  }


})();

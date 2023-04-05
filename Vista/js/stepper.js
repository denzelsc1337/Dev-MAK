const bsStepper = document.querySelector(".bs-stepper");
console.log(bsStepper);
const bsStepperContent = bsStepper.querySelector(".bs-stepper-content");
console.log(bsStepperContent);
const bsSContent = bsStepperContent.querySelectorAll(".content");
console.log(bsSContent);


(() => {
    // const section = document.querySelectorAll(".section");
    // section.forEach((section) => {
    //     if (!section.classList.contains("show")) {
    //         section.classList.add("hide");
    //     }
    // });


    const tipoInmueble = document.querySelector("#tipo_prop");
    var tipoInmuebleValue;
    tipoInmueble.addEventListener('change', function () {
        tipoInmuebleValue = tipoInmueble.value;
    });


    // const buttonSubmit = document.querySelector(".btn_submit");

    // // console.log(buttonSubmit);

    // buttonSubmit.addEventListener("click", function () {
    //     // console.log(tipoInmuebleValue);
    //     // console.log(tipoInmuebleValue);

    //     const Sections = document.querySelectorAll(".section")

    //     section.forEach(element => {
    //         const idSections = element.getAttribute('id');
    //         console.log(idSections);
    //         console.log(tipoInmuebleValue);

    //         if (idSections === tipoInmuebleValue) {
    //             console.log("asd");
    //         }

    //         console.log(idSections.includes(tipoInmuebleValue));
    //         if (idSections.includes(tipoInmuebleValue)) {
    //             console.log("123");
    //             element.classList.remove("hide");
    //             element.classList.add("show");
    //         } else {
    //             element.classList.remove('active');
    //             element.classList.add('hide');

    //         }

    //     });
    // });


    const movPag = document.querySelector(".movPag");
    const sigPag = document.querySelectorAll(".sigPag");
    const atrPag = document.querySelectorAll(".atrPag");


    // sigPag.addEventListener("click", function (e) {
    //     e.preventDefault();

    //     movPag.style.marginLeft = "-100%"
    // })
    var increment = 0;
    var decrement;

    function avanzar() {
        increment += 100;

        return increment;
    }

    sigPag.forEach(element => {
        element.addEventListener("click", function (e) {
            avanzar();
            e.preventDefault();
            movPag.style.marginLeft = "-" + increment + "%";

        })
    });


    function retroceder() {
        decrement = increment -= 100;

        return decrement;
    }

    atrPag.forEach(element => {
        element.addEventListener("click", function (e) {
            retroceder();
            e.preventDefault();
            movPag.style.marginLeft = "-" + decrement + "%";

        })
    });


    // atrPag.addEventListener("click", function (e) {
    //     e.preventDefault();
    //     movPag.style.marginLeft = "0%"
    // })
})();
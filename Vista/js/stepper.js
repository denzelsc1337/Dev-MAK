const bsStepper = document.querySelector(".bs-stepper");
const bsStepperContent = bsStepper.querySelector(".bs-stepper-content");
const bsSContent = bsStepperContent.querySelectorAll(".content");


(() => {
    // const section = document.querySelectorAll(".section");
    // section.forEach((section) => {
    //     if (!section.classList.contains("show")) {
    //         section.classList.add("hide");
    //     }
    // });


    // const tipoInmueble = document.querySelector("#tipo_prop");
    // var tipoInmuebleValue;
    // tipoInmueble.addEventListener('change', function () {
    //     tipoInmuebleValue = tipoInmueble.value;
    // });


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


    // const movPag = document.querySelector(".movPag");
    // const sigPag = document.querySelectorAll(".sigPag");
    // const atrPag = document.querySelectorAll(".atrPag");

    // var increment = 0;
    // var decrement;

    // function avanzar() {
    //     increment += 100;

    //     return increment;
    // }

    // sigPag.forEach(element => {
    //     element.addEventListener("click", function (e) {
    //         avanzar();
    //         e.preventDefault();
    //         movPag.style.marginLeft = "-" + increment + "%";

    //     })
    // });


    // function retroceder() {
    //     decrement = increment -= 100;

    //     return decrement;
    // }

    // atrPag.forEach(element => {
    //     element.addEventListener("click", function (e) {
    //         retroceder();
    //         e.preventDefault();
    //         movPag.style.marginLeft = "-" + decrement + "%";

    //     })
    // });



    const nextPag = document.querySelector(".nextPag");
    const backPag = document.querySelectorAll(".backPag");
    const sigPag = document.querySelectorAll(".sigPag");
    const atrPag = document.querySelector(".atrPag");


    function pantallaActual() {
        const pantallaActual = document.querySelector('[id^="pantalla"]:not([style*="display: none"])');
        pantallaActual.style.display = 'none';
        console.log(pantallaActual);
    }

    nextPag.addEventListener("click", () => {

        // Obtener el valor seleccionado del combobox
        const pantallaSeleccionada = document.getElementById('tipo_prop').value;

        // Ocultar todas las pantallas
        const pantallas = document.querySelectorAll('[id^="pantalla"]');
        pantallas.forEach(function (pantalla) {
            pantalla.style.display = 'none';
        });

        // Mostrar la siguiente pantalla correspondiente al valor seleccionado
        if (pantallaSeleccionada !== '') {
            const siguientePantalla = document.getElementById(pantallaSeleccionada);
            siguientePantalla.style.display = 'block';
        }
    })

    backPag.forEach(element => {
        element.addEventListener("click", () => {
            // Ocultar la pantalla actual
            pantallaActual();

            // Mostrar la primera pantalla
            const primeraPantalla = document.getElementById('pantalla-S');
            primeraPantalla.style.display = 'block';
        })
    });


    sigPag.forEach(element => {
        element.addEventListener("click", () => {
            // Ocultar la pantalla actual
            pantallaActual();

            // Mostrar la última pantalla
            const ultimaPantalla = document.querySelector('[id^="pantalla"]:last-child');
            ultimaPantalla.style.display = 'block';
        })

    });

    // atrPag.forEach(element => {
    atrPag.addEventListener("click", () => {
        // Ocultar la pantalla actual
        pantallaActual();


        // Obtener el valor seleccionado del combobox
        const pantallaSeleccionada = document.getElementById('tipo_prop').value;


        // // Obtener la pantalla anterior
        // const pantallas = document.querySelectorAll('[id^="pantalla"]');

        if (pantallaSeleccionada !== '') {
            const siguientePantalla = document.getElementById(pantallaSeleccionada);
            siguientePantalla.style.display = 'block';
        }

    })
    // })

})();
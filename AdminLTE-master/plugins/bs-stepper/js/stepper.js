const bsStepper = document.querySelector(".bs-stepper");
// console.log(bsStepper);
const bsStepperContent = bsStepper.querySelector(".bs-stepper-content");
// console.log(bsStepperContent);
const bsSContent = bsStepperContent.querySelectorAll(".content");
// console.log(bsSContent);


(() => {
    const section = document.querySelectorAll(".section");
    section.forEach((section) => {
        if (!section.classList.contains("show")) {
            section.classList.add("hide");
        }
    })
})();

(() => {
    const tipoInmueble = document.querySelector("#tipo_prop");


    tipoInmueble.addEventListener('change', function () {
        const tipoInmuebleValue = tipoInmueble.value;

        console.log(tipoInmuebleValue);

    });

})();
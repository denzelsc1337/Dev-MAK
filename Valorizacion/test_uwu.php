<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .buton-icon {
        width: 50px;
        height: 50px;
        border: 2px solid;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        cursor: pointer;
    }

    .contenedor {
        max-width: 300px;
        display: flex;
        overflow: hidden;
    }

    .section {
        /* display: none; */
        min-width: 0;
        height: 300px;
        transition: all 1s ease;
    }

    .section div {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
    }

    .section.active {
        min-width: 300px;
    }

    .red {
        background-color: red;
    }

    .blue {
        background-color: blue;
    }

    .green {
        background-color: green;
    }
</style>

<body>


    <div class="buton-icon left"> left </div>

    <div class="contenedor">

        <div class="red section" data-position="first" data-number="1">
            <div>
                red
            </div>
        </div>

        <div class="blue section active" data-position="second" data-number="2">
            <div>
                blue
            </div>
        </div>

        <div class="green section" data-position="third" data-number="3">
            <div>
                green
            </div>
        </div>

    </div>

    <div class="buton-icon right"> right </div>


</body>

<script>
    const butonIconLeft = document.querySelector('.arrow-left');
    const butonIconRight = document.querySelector('.arrow-right');

    butonIconRight.addEventListener("click", () => {
        dondeEstoy("right");
    });

    butonIconLeft.addEventListener("click", () => {
        dondeEstoy("left");
    });

    function dondeEstoy(direction) {
        // Obtener todas las secciones
        var sections = document.querySelectorAll('.section');

        // Encontrar la sección activa actual
        var currentSection;
        sections.forEach(function(section) {
            if (section.classList.contains('active')) {
                currentSection = section;
            }
        });

        // Determinar la dirección y encontrar la siguiente sección
        var nextSection;
        if (direction === 'left') {
            nextSection = currentSection.previousElementSibling;
            if (!nextSection) {
                // Si no hay una siguiente sección a la izquierda, selecciona la última
                nextSection = sections[sections.length - 1];
            }
        } else if (direction === 'right') {
            nextSection = currentSection.nextElementSibling;
            if (!nextSection) {
                // Si no hay una siguiente sección a la derecha, selecciona la primera
                nextSection = sections[0];
            }
        }

        // Evitar la transición de verde a rojo y viceversa
        if (currentSection.classList.contains('green') && nextSection.classList.contains('red')) {
            return;
        }

        if (currentSection.classList.contains('red') && nextSection.classList.contains('green')) {
            return;
        }

        // Cambiar las clases 'active' para la sección actual y la siguiente
        if (currentSection && nextSection) {
            currentSection.classList.remove('active');
            nextSection.classList.add('active');
        }
    }
</script>


</html>
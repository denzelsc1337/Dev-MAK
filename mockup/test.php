<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Selección con Fondos</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        #backgroundSelector {
            background-color: #ffffff;
            /* Estilo inicial del select */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        #backgroundSelector.option1 {
            background-color: #ff9999;
            /* Fondo para la opción 1 */
        }

        #backgroundSelector.option2 {
            background-color: #99ff99;
            /* Fondo para la opción 2 */
        }

        #backgroundSelector.option3 {
            background-color: #9999ff;
            /* Fondo para la opción 3 */
        }

        #backgroundSelector.option1:hover {
            /* Restricción de estilos de hover en las opciones */
            background-color: inherit;
            /* Puedes usar "transparent" si es necesario */
            color: inherit;
            /* Puedes usar el color deseado */
            cursor: pointer;
        }

        #backgroundSelector:hover .option1 {
            /* Restricción de estilos de hover en las opciones */
            background-color: inherit;
            /* Puedes usar "transparent" si es necesario */
            color: inherit;
            /* Puedes usar el color deseado */
            cursor: pointer;
        }
    </style>


</head>

<body>
    <select id="backgroundSelector">
        <option value="option1" style="background-color: #ff9999;">Opción 1</option>
        <option value="option2" style="background-color: #99ff99;">Opción 2</option>
        <option value="option3" style="background-color: #9999ff;">Opción 3</option>
    </select>
</body>


<script>
    const backgroundSelector = document.getElementById("backgroundSelector");

    backgroundSelector.addEventListener("change", applySelectedBackground);

    function applySelectedBackground() {
        const selectedOption = backgroundSelector.options[backgroundSelector.selectedIndex];
        const selectedValue = selectedOption.value;

        // Elimina todas las clases de fondo anteriores
        backgroundSelector.classList.remove("option1", "option2", "option3");

        // Agrega la clase correspondiente al select
        backgroundSelector.classList.add(selectedValue);
    }
</script>

</html>
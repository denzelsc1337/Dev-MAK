<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<style>
    .bla {
        width: 500px;
        background-color: lightcoral;
    }

    .blaa {
        display: flex;
        overflow: hidden;
        width: 500px;
        background-color: yellowgreen;
    }

    .blaaa {
        min-width: 100%;
        background-color: rosybrown;

    }
</style>

<body>
    <div class="bla">
        <div class="blaa">

            <div class="blaaa">
                <div>your content</div>
            </div>
            <div class="blaaa">
                <div>your content</div>
            </div>
            <div class="blaaa">
                <div>your content</div>
            </div>
        </div>
    </div>


    <div id="lst_fotos">
        <div class="imagen-slide"><img src="../Valorizaciones/143/75481104/fotos_val/WhatsApp Image 2023-08-08 at 00.16.35.jpeg" alt="WhatsApp Image 2023-08-08 at 00.16.35.jpeg"></div>
        <div class="imagen-slide"><img src="../Valorizaciones/143/75481104/fotos_val/WhatsApp Image 2023-08-22 at 20.51.31.jpeg" alt="WhatsApp Image 2023-08-22 at 20.51.31.jpeg"></div>
        <div class="imagen-slide"><img src="../Valorizaciones/143/75481104/fotos_val/WhatsApp Image 2023-08-22 at 20.51.40.jpeg" alt="WhatsApp Image 2023-08-22 at 20.51.40.jpeg"></div>
    </div>
    <script>
        const carousel = document.querySelector('#fotos_val');

        let isDragStart = false,
            prevPageX, prevScrollLeft;

        const dragStart = (e) => {
            isDragStart = true;
            prevPageX = e.pageX;
            prevScrollLeft = carousel.scrollLeft;
        }

        const dragGing = (e) => {
            if (!isDragStart) return;
            e.preventDefault();
            let positionDiff = e.pageX - prevPageX;
            carousel.scrollLeft = prevScrollLeft - positionDiff;
        }

        const dragStop = () => {
            isDragStart = false;
        }

        carousel.addEventListener("mousedown", dragStart);
        carousel.addEventListener("mousemove", dragGing);
        carousel.addEventListener("mouseup", dragStop);
    </script>


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <script>
        $('.your-class').slick();
    </script>
</body>



</html>
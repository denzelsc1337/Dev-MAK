<div class="lateral_bar lateral_right">

    <div class="mak-bdr panel panel_01">
        <div class="panel-text">
            <div class="text_panel">
                <p>¿Tienes consultas sobre tu plataforma?</p>
                <p>Contacta al <b>servicio técnico.</b></p>
            </div>
            <a href="" class="btn_panel">
                Ver más<i class="fa-solid fa-chevron-right"></i>
            </a>

        </div>
        <img src="./../Vista/images/Plataforma/PanelPrincipal/ServicioTecnico.png" alt="">
    </div>

    <div class="mak-bdr panel panel_02">
        <img src="./../Vista/images/Plataforma/PanelPrincipal/Banner1.png" alt="">
    </div>

    <div class="mak-bdr panel panel_03">
        <div class="calendar-container">
            <div class="calendar-header">
                <span>Mi calendario</span>
                <button class="view-all">Ver todo</button>
            </div>
            <div class="calendar-navigation">
                <button id="prev-month">&lt;</button>
                <span id="calendar-month-year"></span>
                <button id="next-month">&gt;</button>
            </div>
            <table class="calendar">
                <thead>
                    <tr>
                        <th>L</th>
                        <th>M</th>
                        <th>M</th>
                        <th>J</th>
                        <th>V</th>
                        <th>S</th>
                        <th>D</th>
                    </tr>
                </thead>
                <tbody id="calendar-body">
                    <!-- Días del calendario generados dinámicamente -->
                </tbody>
            </table>
            <div class="event" id="event-details">
                <!-- <div>
                    <span>Saneamiento Legal</span>
                    <br>
                    <span id="saneammiento"><small></small></span>
                </div>
                <span class="badge badge-light">ID 238765</span> -->
                <div class="saneamiento-content">
                    <div><span>Saneamiento Legal</span></div>
                    <div>
                        <span>ID <?php
                                    //echo $ID->total_props; 
                                    if (isset($ID) && $ID !== null) {
                                        echo $ID->total_props;
                                    } else {
                                        echo "1";
                                    }
                                    ?></span>
                    </div>
                </div>
                <div class="saneamiento-dates">
                    <i class="fa-regular fa-calendar"></i>
                    <span id="saneammiento"></span>
                </div>
            </div>
        </div>

    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const calendarBody = document.getElementById('calendar-body');
        const monthYear = document.getElementById('calendar-month-year');
        const saneamiento = document.getElementById('saneammiento');
        const prevMonthButton = document.getElementById('prev-month');
        const nextMonthButton = document.getElementById('next-month');

        let currentDate = new Date();

        const saneamientoPorMes = {
            "Enero": [1, 2, 3],
            "Febrero": [4, 5, 6],
            "Marzo": [7, 8, 9],
            "Abril": [10, 11, 12],
            "Mayo": [13, 14, 15],
            "Junio": [16, 17, 18],
            "Julio": [19, 20, 21],
            "Agosto": [22, 23, 24],
            "Septiembre": [25, 26, 27],
            "Octubre": [28, 29, 30],
            "Noviembre": [1, 2, 3],
            "Diciembre": [4, 5, 6],
        };

        function getMonthName(monthIndex) {
            const monthNames = [
                "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
            ];
            return monthNames[monthIndex];
        }

        function renderCalendar(date) {
            calendarBody.innerHTML = '';

            const currentMonth = date.getMonth();
            const currentYear = date.getFullYear();
            const monthName = getMonthName(currentMonth);

            monthYear.textContent = `${monthName} ${currentYear}`;

            const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();
            const lastDayOfMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

            const lastDayOfPrevMonth = new Date(currentYear, currentMonth, 0).getDate();

            let dayCount = 1;

            const saneamientoDates = saneamientoPorMes[monthName] || [];

            // const saneamientoDates = saneamientoPorMes[monthName] || [];
            const firstSaneamiento = saneamientoDates[0];
            const lastSaneamiento = saneamientoDates[saneamientoDates.length - 1];

            // console.log(firstSaneamiento);
            // console.log(lastSaneamiento);

            for (let i = 0; i < 6; i++) {
                const row = document.createElement('tr');
                for (let j = 0; j < 7; j++) {
                    const cell = document.createElement('td');

                    if (i === 0 && j < firstDayOfMonth) {
                        // Display days of the previous month
                        cell.textContent = lastDayOfPrevMonth - (firstDayOfMonth - j - 1);
                        cell.classList.add('prev-month');
                    } else if (dayCount <= lastDayOfMonth) {
                        // Display days of the current month
                        cell.textContent = dayCount;
                        if (saneamientoDates.includes(dayCount)) {
                            cell.classList.add('saneamiento');
                            if (dayCount === saneamientoDates[0] || dayCount === saneamientoDates[saneamientoDates.length - 1]) {
                                cell.classList.add('saneamiento-first-last');
                            }
                        }
                        dayCount++;
                    } else {
                        // Display days of the next month
                        cell.textContent = dayCount - lastDayOfMonth;
                        cell.classList.add('next-month');
                        dayCount++;
                    }

                    row.appendChild(cell);
                }
                calendarBody.appendChild(row);

                if (dayCount > lastDayOfMonth) break; // Corrección aquí
            }

            saneamiento.textContent = `${firstSaneamiento + " " + monthName}  - ${lastSaneamiento + " " + monthName}`;

        }

        function changeMonth(offset) {
            let newMonth = currentDate.getMonth() + offset;
            let newYear = currentDate.getFullYear();

            // console.log(monthString);

            if (newMonth < 0) {
                newMonth = 11;
                newYear--;
            } else if (newMonth > 11) {
                newMonth = 0;
                newYear++;
            }

            const currentDay = currentDate.getDate();
            const daysInNewMonth = new Date(newYear, newMonth + 1, 0).getDate();

            if (currentDay > daysInNewMonth) {
                currentDate.setDate(daysInNewMonth);
            } else {
                currentDate.setDate(currentDay);
            }

            currentDate.setMonth(newMonth);
            currentDate.setFullYear(newYear);

            renderCalendar(currentDate);
        }

        prevMonthButton.addEventListener('click', function() {
            changeMonth(-1);
        });

        nextMonthButton.addEventListener('click', function() {
            changeMonth(1);
        });

        renderCalendar(currentDate);
    });
</script>
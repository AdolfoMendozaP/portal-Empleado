//header - clock//
function updateDateTime() {
    const now = new Date();
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    const dateString = now.toLocaleDateString('es-ES', options);
    document.getElementById('date').textContent = `${dateString}`;
}

setInterval(updateDateTime, 1000);
updateDateTime();

//section - calendar//
function generateCalendar() {
    const today = new Date();
    const year = today.getFullYear();
    const currentMonth = today.getMonth();
    const currentDate = today.getDate();
    
    const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                        "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    const calendarContainer = document.getElementById("calendar-container");
    calendarContainer.innerHTML = '';
    for (let month = 0; month < 12; month++) {
        const monthDiv = document.createElement("div");
        monthDiv.className = "calendar";

        const title = document.createElement("h3");
        title.textContent = `${monthNames[month]} ${year}`;
        monthDiv.appendChild(title);

        const table = document.createElement("table");
        const thead = document.createElement("thead");
        const tbody = document.createElement("tbody");

        const headerRow = document.createElement("tr");
        ["D", "L", "M", "M", "J", "V", "S"].forEach((day, index) => {
            const th = document.createElement("th");
            th.textContent = day;

            // Resaltar los sábados y domingos en el encabezado
            if (index === 5 || index === 6) {
                th.classList.add("weekend-header");
            }

            headerRow.appendChild(th);
        });
        thead.appendChild(headerRow);
        table.appendChild(thead);
        
        const firstDay = new Date(year, month, 1).getDay(); 
        const daysInMonth = new Date(year, month + 1, 0).getDate(); 

        let row = document.createElement("tr");
        for (let i = 0; i < firstDay; i++) {
            row.appendChild(document.createElement("td"));
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const cell = document.createElement("td");
            cell.textContent = day;

            const date = new Date(year, month, day);
            const dayOfWeek = date.getDay();

            // Resaltar la fecha actual con colores invertidos
            if (year === today.getFullYear() && month === currentMonth && day === currentDate) {
                cell.classList.add("highlight-today");
            }

            // Resaltar sábados (día 6) y domingos (día 0) con color lila
            if (dayOfWeek === 6 || dayOfWeek === 0) {
                cell.classList.add("weekend-day");
            }

            row.appendChild(cell);

            if ((firstDay + day) % 7 === 0) {
                tbody.appendChild(row);
                row = document.createElement("tr");
            }
        }

        if (row.children.length > 0) {
            tbody.appendChild(row);
        }

        table.appendChild(tbody);
        monthDiv.appendChild(table);
        calendarContainer.appendChild(monthDiv);
    }
}
window.onload = generateCalendar;


//footer - welcomepage//
document.getElementById('current-year').textContent = new Date().getFullYear();

//DarkTheme//
document.addEventListener("DOMContentLoaded", function() {
    const button = document.querySelector('.darktheme');

    button.addEventListener('click', function() {
        document.body.classList.toggle('dark-theme');
    });
});

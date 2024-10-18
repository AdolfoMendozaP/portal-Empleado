//header - clock//
let selectedTimeZone = localStorage.getItem('selectedTimeZone') || 'America/Mexico_City';
let selectedTimeZoneText = localStorage.getItem('selectedTimeZoneText') || 'Hora Estacional';

function updateDateTime() {
    const now = new Date();
    const optionsDate = {
        timeZone: selectedTimeZone,
        year: 'numeric',
        month: 'long',
        day: 'numeric',
    };
    const optionsTime = {
        timeZone: selectedTimeZone,
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
    };
    const dateString = now.toLocaleDateString('es-ES', optionsDate);
    const timeString = now.toLocaleTimeString('es-ES', optionsTime);

    document.getElementById('dateTime').textContent = `${dateString} ${timeString}`;
    document.getElementById('selectedTimeZoneText').textContent = selectedTimeZoneText;
}

function changeTimeZone(timeZone, timeZoneName) {
    selectedTimeZone = timeZone;
    selectedTimeZoneText = `Hora Estacional - ${timeZoneName}`;
    localStorage.setItem('selectedTimeZone', timeZone);
    localStorage.setItem('selectedTimeZoneText', selectedTimeZoneText);
    updateDateTime();
}

function detectUserLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((position) => {
            const lat = position.coords.latitude;
            const lon = position.coords.longitude;
            fetch(`https://timezoneapi.io/api/ip/?token=YOUR_API_KEY`)
                .then(response => response.json())
                .then(data => {
                    const userTimeZone = data.data.timezone.id;
                    changeTimeZone(userTimeZone, userTimeZone);
                })
                .catch(() => {
                    console.log('No se pudo detectar la zona horaria automáticamente.');
                });
        });
    } else {
        console.log('La geolocalización no está disponible en este navegador.');
    }
}

if (!localStorage.getItem('selectedTimeZone')) {
    detectUserLocation();
} else {
    updateDateTime();
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

            if (year === today.getFullYear() && month === currentMonth && day === currentDate) {
                cell.classList.add("highlight-today");
            }

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
document.addEventListener("DOMContentLoaded", function() 
{
    const button = document.querySelector('.darktheme');
    if (localStorage.getItem('dark-theme') === 'enabled') {
        document.body.classList.add('dark-theme');
    }

    button.addEventListener('click', function() {
        document.body.classList.toggle('dark-theme');
        if (document.body.classList.contains('dark-theme')) {
            localStorage.setItem('dark-theme', 'enabled');
        } else {
            localStorage.removeItem('dark-theme');
        }
    });
});
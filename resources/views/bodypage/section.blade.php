<link rel="stylesheet" href="{{ asset('css/stylebodysection.css') }}">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Sección</h2>
        </div>
        <div class="col-md-6 text-md-end">
            <div class="btn-group dropstart">
                <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false" type="button" id="horaEstacionalDropdown">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span id="selectedTimeZoneText">Zona Horaria</span>
                </button>
                <ul class="dropdown-menu" id="timeZoneOptions">
                    <li><a class="dropdown-item" href="#" onclick="changeTimeZone('America/Mexico_City', 'CDMX')">(UTC-06:00) Hora CDMX</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeTimeZone('America/Lima', 'Perú')">(UTC-05:00) Hora Perú</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeTimeZone('America/New_York', 'Este (NY)')">(UTC-05:00) Hora del Este (NY)</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeTimeZone('America/Chicago', 'Central (Chicago)')">(UTC-06:00) Hora Central (Chicago)</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeTimeZone('America/Denver', 'Montañas (Denver)')">(UTC-07:00) Hora de las Montañas (Denver)</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeTimeZone('America/Los_Angeles', 'Pacífico (LA)')">(UTC-08:00) Hora del Pacífico (LA)</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeTimeZone('America/Sao_Paulo', 'Brasil (São Paulo)')">(UTC-03:00) Hora de Brasil (São Paulo)</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeTimeZone('America/Bogota', 'Colombia (Bogotá)')">(UTC-05:00) Hora de Colombia (Bogotá)</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeTimeZone('America/Caracas', 'Venezuela (Caracas)')">(UTC-04:00) Hora de Venezuela (Caracas)</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeTimeZone('America/Guatemala', 'Guatemala')">(UTC-06:00) Hora de Guatemala</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeTimeZone('America/Montevideo', 'Uruguay (Montevideo)')">(UTC-03:00) Hora de Uruguay (Montevideo)</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeTimeZone('America/Havana', 'Cuba (La Habana)')">(UTC-04:00) Hora de Cuba (La Habana)</a></li>
                </ul>
            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="solicitar">
                <i class="fa-solid fa-calendar-check"></i>
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                @include('modalpage.modalAu')
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <p class="info-text">Lorem</p>
            <p class="info-number">25</p>
        </div>
        <div class="col-md-3">
            <p class="info-text">Lorem</p>
            <p class="info-number">3</p>
        </div>
        <div class="col-md-3">
            <p class="info-text">Lorem</p>
            <p class="info-number">1</p>
        </div>
        <div class="col-md-3">
            <p class="info-text">Lorem</p>
            <p class="info-number">0</p>
        </div>
    </div>
</div>
<div class="container-calendar" id="calendar-container"></div>
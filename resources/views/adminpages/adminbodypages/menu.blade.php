<link rel="stylesheet" href="{{ asset('css/stylebodynav.css') }}">
<div class="logo">
<img src="https://consultancysc.com/wp-content/uploads/2023/08/LogoConsultancyITfinal-150x150.png" alt="Logo Consultancy">
            <div class="logo-text">
                <strong>Consultancy</strong>
                <span class="small-text">Servicios Contables</span>
            </div>
        </div>
<ul class="menu">
        <li>
            <a href="{{ url('/dashboard') }}">
                <div class="menu-item">
                    <i class="fa-solid fa-home fa-lg"></i>
                    <span class="small-text">Inicio</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.registros.index') }}">
                <div class="menu-item">
                    <i class="fa-solid fa-database fa-lg"></i>
                    <span class="small-text">Registros</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.asistencia.index') }}">
                <div class="menu-item">
                    <i class="fa-solid fa-table fa-lg"></i>
                    <span class="small-text">Asistencia</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.estadistica.index') }}">
                <div class="menu-item">
                    <i class="fa-solid fa-chart-column fa-lg"></i>
                    <span class="small-text">Estadística</span>
                </div>
            </a>
        </li>
    <li class="logout"> 
        <a href="#">
            <div class="menu-item">
                <i class="fa-solid fa-right-from-bracket fa-lg"></i>
                <span class="small-text">Cerrar Sesión</span>
            </div>
        </a>
    </li>
</ul>
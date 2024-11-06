<link rel="stylesheet" href="{{ asset('css/stylebodyheader.css') }}">
<link rel="stylesheet" href="{{ asset('css/stylebodyheader.css') }}">
<div class="row align-items-center">
    <div class="col-md-6">
        <h2 class="no-bold">Dashboard</h2>
    </div>
    <div class="col-md-6"> 
        <div class="d-flex align-items-center justify-content-end">
            <div id="dateTime" class="me-2">00-00-00 00:00:00</div>
            <div class="d-flex align-items-center ms-4">
                <div class="dropdown">
                    <button id="notificaciones" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <a href="#"><i class="fas fa-bell"></i></a>
                    </button>
                    <ul class="dropdown-menu">
                        <li><button class="dropdown-item" type="button">Notificaciones</button></li>
                        <li><hr class="dropdown-divider"></li>
                        <li class="dropdown-item" id="marcar">Marca como leido</li>
                    </ul>
                </div>
            </div>

            <div class="d-flex align-items-center ms-4" id="sesion">
                <span class="ms-2" id="text">John Doe</span>
            </div>
        </div>
    </div>
</div>
    <div class="container mt-4">
        <div class="row">
            
        </div>
    </div>

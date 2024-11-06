<link rel="stylesheet" href="{{ asset('css/stylebodysection.css') }}">
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <h2>Datos Generales</h2>
        </div>
        <div class="col-md-6 text-md-end">
        <input type="search" placeholder="Search">
        @if(request()->is('admin/registros/empleados') || request()->is('admin/registros/usuario'))
                <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    @if(request()->is('admin/registros/empleados'))
                        Registrar Empleados
                    @elseif(request()->is('admin/registros/usuario'))
                        Registrar Usuarios
                    @endif
                </button>
            @endif
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    {{-- Título cambia según la sección activa --}}
                    @if(request()->is('admin/registros/empleados'))
                        Registrar Empleado
                    @elseif(request()->is('admin/registros/usuario'))
                        Registrar Usuario
                    @endif
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- Incluir el formulario adecuado dependiendo de la ruta --}}
                @if(request()->is('admin/registros/empleados'))
                    @include('adminpages.registros.empleados.create') {{-- Formulario para empleados --}}
                @elseif(request()->is('admin/registros/usuario'))
                    @include('adminpages.registros.usuario.create') {{-- Formulario para usuarios --}}
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
            <button class="btn btn-success">Excel</button>
        </div>
    </div>
</div>
<br>
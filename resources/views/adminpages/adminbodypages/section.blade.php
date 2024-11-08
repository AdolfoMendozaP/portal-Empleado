<link rel="stylesheet" href="{{ asset('css/stylebodysection.css') }}">
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <h2>Datos Generales</h2>
        </div>
        <div class="col-md-6 text-md-end">
        @if(request()->is('admin/registros/empleados') || request()->is('admin/registros/usuario'))
                <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    @if(request()->is('admin/registros/empleados'))
                    <i class="fa-solid fa-user-plus"></i>
                    @elseif(request()->is('admin/registros/usuario'))
                    <i class="fa-solid fa-user-plus"></i>
                    @endif
                </button>
            @endif
            @if(request()->is('admin/asistencia'))
                <button type="button" class="btn btn-secondary me-2"><i class="fa-solid fa-refresh"></i></button>
                <button type="button" class="btn btn-danger me-2"><i class="fa-solid fa-trash"></i></button>
            @endif
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    @if(request()->is('admin/registros/empleados'))
                        Registrar Nuevo Empleado
                    @elseif(request()->is('admin/registros/usuario'))
                        Registrar Nuevo Usuario
                    @endif
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if(request()->is('admin/registros/empleados'))
                    @include('adminpages.registros.empleados.create')
                @elseif(request()->is('admin/registros/usuario'))
                    @include('adminpages.registros.usuario.create')
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning"><i class="fa-solid fa-rotate-right"></i> Reiniciar</button>
                <button type="button" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar </button>
            </div>
        </div>
    </div>
</div>
@if(request()->is('admin/registros') || request()->is('admin/registros/empleados') || request()->is('admin/registros/usuario') || request()->is('admin/asistencia'))
            <button class="btn btn-success"><i class="fa-solid fa-file-excel"></i></button>
            <button class="btn btn-danger"><i class="fa-solid fa-file-pdf"></i></button>
        </div>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" 
            placeholder="
                @if(request()->is('admin/registros/empleados'))
                Buscar Empleados
                @elseif(request()->is('admin/registros/usuario'))
                Buscar Usuarios
                @elseif(request()->is('admin/asistencia'))
                Buscar Asistencia
                @else
                Buscar
                @endif
            " style="width: 60%;">
        <button class="btn btn-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
@endif
    </div>
</div>
<br>
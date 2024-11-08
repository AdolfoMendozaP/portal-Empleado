<div class="modal-content">
    <div class="modal-header">
    <h1 class="modal-title fs-5" id="staticBackdropLabel">
            @if(request()->is('admin/registros/empleados*'))
                Editar Empleado
            @elseif(request()->is('admin/registros/usuario*'))
                Editar Usuario
            @endif
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        @if(request()->is('admin/registros/empleados'))
            @include('adminpages.registros.empleados.edit')
        @elseif(request()->is('admin/registros/usuario'))
            @include('adminpages.registros.usuario.edit')
        @endif
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-warning"><i class="fa-solid fa-rotate-right"></i> Reiniciar Cambios</button>
    <button type="button" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar Cambios</button>
    </div>
</div>
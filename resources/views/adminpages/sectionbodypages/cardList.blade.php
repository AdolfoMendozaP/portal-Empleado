<div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/registros') ? 'active' : '' }}" href="{{ route('admin.registros.index') }}">Todos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/registros/empleados') ? 'active' : '' }}" href="{{ route('admin.registros.empleados.index') }}">Empleados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/registros/usuario') ? 'active' : '' }}" href="{{ route('admin.registros.usuario.index') }}">Usuarios</a>
        </li>
    </ul>
</div>

<div class="card-body">
    <table class="table">
        @if(request()->is('admin/registros/empleados'))
            @include('adminpages.registros.empleados.index')
        @elseif(request()->is('admin/registros/usuario'))
            @include('adminpages.registros.usuario.index')
        @elseif(request()->is('admin/registros'))
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Username</th>
                    <th>Folio</th>
                    <th>Departamento</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john.doe</td>
                    <td>1234</td>
                    <td>Marketing</td>
                    <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><i class="fa-solid fa-eye"></i></button>
                    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
          @include('adminpages.sectionbodypages.modalView')
  </div>
</div></td>
                </tr>
            </tbody>
        @endif
    </table>
</div>

<div class="card-footer text-body-secondary">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

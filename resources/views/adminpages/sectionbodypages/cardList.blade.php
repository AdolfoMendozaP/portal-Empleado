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
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Folio</th>
                <th>Departamento</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>1234</td>
                <td>N/A</td>
                <td><button>Editar</button>
                <button>Eliminar</button>
            </td>
            </tr>
        </tbody>
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
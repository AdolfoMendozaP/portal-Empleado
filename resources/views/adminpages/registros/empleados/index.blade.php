<thead>
    <tr>
        <th class="table-active">ID</th>
        <th>Foto</th>
        <th>Nombre</th>
        <th>Folio</th>
        <th>Genero</th>
        <th>Departamento</th>
        <th class="table-dark">Estado</th>
        <th>Opciones</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td class="table-active">1</td>
        <td><div class="text-center"><img src="https://etecnic.es/wp-content/uploads/2019/08/silueta-hombre.png" class="rounded" alt="..." style="width: 25px; height: 25px;"></td></div>
        <td>John Doe</td>
        <td>1234</td>
        <td>Hombre</td>
        <td>N/A</td>
        <td class="table-success">Activo</td>
        <td>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"><i class="fa-solid fa-user-pen"></i></button>
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
          @include('adminpages.sectionbodypages.modalEdit')
  </div>
</div>
            <button type="button" class="btn btn-danger"><i class="fa-solid fa-user-minus"></i></button>
        </td>
    </tr>
    <tr>
        <td class="table-active">2</td>
        <td><div class="text-center"><img src="https://cdn-icons-png.flaticon.com/512/56/56863.png" class="rounded" alt="..." style="width: 25px; height: 25px;"></td></div>
        <td>Jane Doe</td>
        <td>4321</td>
        <td>Mujer</td>
        <td>N/A</td>
        <td class="table-secondary">Retirado</td>
        <td>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"><i class="fa-solid fa-user-pen"></i></button>
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
          @include('adminpages.sectionbodypages.modalEdit')
  </div>
</div>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-user-minus"></i></button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            @include('adminpages.sectionbodypages.modalDel')
        </td>
    </tr>
</tbody>
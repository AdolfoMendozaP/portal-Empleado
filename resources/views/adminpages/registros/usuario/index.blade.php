<thead>
    <tr>
        <th class="table-active">ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Type</th>
        <th>Opciones</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td class="table-active">1</td>
        <td class="table-active">John Doe</td>
        <td class="table-active">1234</td>
        <td class="table-active">Admin</td>
        <td class="table-active"><button type="button" class="btn btn-warning"><i class="fa-solid fa-lock"></i></button></td>
    </tr>
    <tr>
        <td class="table-active">2</td>
        <td>Jane Doe</td>
        <td>4321</td>
        <td>Standard</td>
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
</div>
            <button type="button" class="btn btn-warning"><i class="fa-solid fa-lock"></i>
        </td>
    </tr>
</tbody>
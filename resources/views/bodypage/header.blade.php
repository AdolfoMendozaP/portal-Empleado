<link rel="stylesheet" href="{{ asset('css/stylebodyheader.css') }}">
<div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="no-bold">Portal</h2>
                </div>
                <div class="col-md-6"> 
                    <div class="d-flex align-items-center justify-content-end">
                      <div id="dateTime" class="me-2">00-00-00 00:00:00</div>
                        <!-- ========== Start Modal ========== -->
                        <button type="button" id="modalbutton" class="btn ms-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                          <span class="icon"><i class='bx bxs-alarm'></i></span>
                           <span class="text">Checador</span>
                        </button>
                        <!-- ========== Start Modal ========== -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                           @include('modalpage.modalAs')
                          </div>
                          <!-- ========== End Modal ========== -->
                        <!-- ========== End Modal ========== -->

                        <div class="d-flex align-items-center ms-4">
                            <div class="dropdown">
                            <button id="notificaciones" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                               <a href="#"><i class="fas fa-bell"></i></a>
                            </button>
                            <ul class="dropdown-menu">
                              <li><button class="dropdown-item" type="button">Action</button></li>
                              <li><hr class="dropdown-divider"></li>
                              <li class="dropdown-item">Separated link</li>
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
            @include('cardpage.cardHeader')
            </div>
        </div>
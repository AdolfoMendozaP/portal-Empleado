<div class="col-md-3">
    <div class="card bg-white">
        <h5 class="card-header">{{ request()->is('dashboard') ? 'Dashboard' : 'Header' }}</h5>
        <div class="card-icon">
            <i class="fas fa-id-card-alt"></i>
        </div>
        <div class="card-body">
            <p class="card-title text-secondary"><strong>{{ request()->is('dashboard') ? 'Dashboard' : 'body' }}</strong></p>
        </div>
        <div class="card-footer">
            <p class="card-text text-secondary">{{ request()->is('dashboard') ? 'Dashboard' : 'footer' }}</p>
        </div>  
    </div>
</div>

<div class="col-md-3">
    <div class="card bg-white">
        <h5 class="card-header">{{ request()->is('dashboard') ? 'Dashboard' : 'Header' }}</h5>
        <div class="card-icon">
            <i class="fas fa-clock"></i>
        </div>
        <div class="card-body">
            <p class="card-title text-secondary"><strong>{{ request()->is('dashboard') ? 'Dashboard' : 'body' }}</strong></p>
        </div>
        <div class="card-footer">
            <p class="card-text text-secondary">{{ request()->is('dashboard') ? 'Dashboard' : 'footer' }}</p>
        </div>  
    </div>
</div>

<div class="col-md-3">
    <div class="card bg-white">
        <h5 class="card-header">{{ request()->is('dashboard') ? 'Dashboard' : 'Header' }}</h5>
        <div class="card-icon">
            <i class="fas fa-file"></i>
        </div>
        <div class="card-body">
            <p class="card-title text-secondary"><strong>{{ request()->is('dashboard') ? 'Dashboard' : 'body' }}</strong></p>
        </div>
        <div class="card-footer">
            <p class="card-text text-secondary">{{ request()->is('dashboard') ? 'Dashboard' : 'footer' }}</p>
        </div>  
    </div>
</div>

<div class="col-md-1">
   <button type="button" class="darktheme" >
   <i class="fa-solid fa-moon"></i>
   </button>
   <!-- ========== Start Section ========== 
     <button type="button" class="camerabanner" >
   <i class='bx bxs-camera' ></i>
   </button>-->
</div>
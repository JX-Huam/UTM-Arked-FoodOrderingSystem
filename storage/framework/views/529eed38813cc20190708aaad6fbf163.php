

<nav class="navbar navbar-expand-lg navbar-dark bg-danger ">
    <div class="container">
        
      

      <a class="navbar-brand" href="/"><h3>MYUTM ARKED</h3></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            
            <div class="container ml-10 mr-10">
          <li class="nav-item"> 
            <a class="nav-link  <?php echo e(($title === "HOME") ? 'active' : ''); ?>" href="/">Home</a>
          </li>
            </div>

            <div class="container ml-10 mr-10">
          <li class="nav-item">
            <a class="nav-link <?php echo e(($title === "ABOUT") ? 'active' : ''); ?>" href="/about">Profile</a>
          </li>
        </div>

        <div class="container ml-10 mr-10">
          <li class="nav-item">
            <a class="nav-link <?php echo e(($title === "BLOG") ? 'active' : ''); ?>" href="<?php echo e(route('view_sales')); ?>">View Sales</a>
          </li>
        </div>

        <div class="container ml-10 mr-20">
    <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('view_orders')); ?>">View Order</a>
    </li>
</div>







        <div class="container ml-10 mr-20">
          <li class="nav-item">
            <a class="nav-link <?php echo e(($title === "food") ? 'active' : ''); ?>" href="/menus">Customize</a>
          </li>
        </div>
        <div class="container ml-10 mr-20">
          <li class="nav-item">
          <button class="nav-link btn" onclick="window.location.href='/logout';">Logout</button>
          </li>
        </div>

        </ul>

       

      </div>
      <form class="form-inline">
        <input class="form-control mt-3 mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="button btn btn-success my-sm-3" type="submit"><div style="display: felx; justify-content:center; align-items:center ">Search</div></button>
      </form>

      </div>
      
    </div>
  </nav>



  <?php /**PATH C:\Laravel\2024\first-app\my_first_app\resources\views/partials/navbar1.blade.php ENDPATH**/ ?>
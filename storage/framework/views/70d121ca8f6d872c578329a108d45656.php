<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

<?php $__env->startSection('container'); ?>


<h1>DASHBOARD</h1>
<br>
<br>


<h5 class="toprated">Top Rated Restaurant</h5>
<br>


<div class="item-box">
    <img src="images\dbesto.jpg" alt="Item Image">
    <div class="item-details">
        <h3>Restaurant D'Besto</h3>
        <p>Chinese Cuisine</p>
        <p>Arked Cengal</p>
        <button>Menu</button>
    </div>
</div>

<div class="item-box">
    <img src="images\arabresto.jpg" alt="Item Image">
    <div class="item-details">
        <h3>Arab Resto</h3>
        <p>Arab Cuisine</p>
        <p>Arked Cengal</p>
        <button>Menu</button>
    </div>
</div>

<div class="item-box">
    <img src="images\drinkodrink.jpg" alt="Item Image">
    <div class="item-details">
        <h3>Drink O Drink</h3>
        <p>Blended Drink</p>
        <p>Arked Cengal</p>
        <button>Menu</button>
    </div>
</div>

<div class="item-box">
    <img src="images\sedaprasa.jpg" alt="Item Image">
    <div class="item-details">
        <h3>Sedap Rasa</h3>
        <p>Malaysian Cuisine</p>
        <p>Arked Cengal</p>
        <button>Menu</button>
    </div>
</div>

<div class="item-box">
    <img src="images\foodest.jpg" alt="Item Image">
    <div class="item-details">
        <h3>Foodest</h3>
        <p>Mixed Cuisine Food</p>
        <p>Arked Meranti</p>
        <button>Menu</button>
    </div>
</div>

<div class="item-box">
    <img src="images\coffeurs.jpg" alt="Item Image">
    <div class="item-details">
        <h3>Coffeurs Cafe</h3>
        <p>Various Handmade Coffee</p>
        <p>Arked N24</p>
        <button>Menu</button>
    </div>
</div>

<div class="item-box">
    <img src="images\tomyummy.jpg" alt="Item Image">
    <div class="item-details">
        <h3>Tomyummy</h3>
        <p>The best tomyum in the town</p>
        <p>Arked N24</p>
        <button>Menu</button>
    </div>
</div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\first-app\my_first_app\resources\views/welcome.blade.php ENDPATH**/ ?>
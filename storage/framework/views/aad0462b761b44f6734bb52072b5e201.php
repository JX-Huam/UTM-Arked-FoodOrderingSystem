<!-- resources/views/order-form.blade.php -->

 <!-- Assuming you have a main layout -->

<?php $__env->startSection('title', 'Place Order'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container mt-4">
        <h1>Place Order</h1>

        <form method="post" action="<?php echo e(route('place.order')); ?>">
            <?php echo csrf_field(); ?>
            <!-- Your form inputs go here -->

            <div class="mb-3">
                <label for="restaurant_id" class="form-label">Restaurant ID</label>
                <input type="text" class="form-control" id="restaurant_id" name="restaurant_id" required>
            </div>

            <div class="mb-3">
                <label for="created_date" class="form-label">Created Date</label>
                <input type="text" class="form-control" id="created_date" name="created_date" required>
            </div>

            <div class="mb-3">
                <label for="created_time" class="form-label">Created Time</label>
                <input type="text" class="form-control" id="created_time" name="created_time" required>
            </div>

            <div class="mb-3">
                <label for="menu_id" class="form-label">Menu ID</label>
                <input type="text" class="form-control" id="menu_id" name="menu_id" required>
            </div>

            <div class="mb-3">
                <label for="total_price" class="form-label">Total Price</label>
                <input type="text" class="form-control" id="total_price" name="total_price" required>
            </div>

            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\first-app\my_first_app\resources\views/order-form.blade.php ENDPATH**/ ?>
    <ul class="navigation-menu">
        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('front::partials.menu.child-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php /**PATH C:\xampp\htdocs\laravelshop\local\themes\myWebsite\src/resources/views/partials/menu/menu.blade.php ENDPATH**/ ?>
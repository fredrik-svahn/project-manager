<?php $__env->startSection('body'); ?>
    <form action="/register" method="post">
        <?php echo csrf_field(); ?>
        <p>Full name</p>
        <input type="text" name="name">
        <p>Email</p>
        <input type="email" name="email">
        <p>Password</p>
        <input type="password" name="password">
        <p>Password confirmation</p>
        <input type="password" name="password_confirmation">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fredde\Documents\GitHub\project-manager\project-manager-frontend\resources\views/register.blade.php ENDPATH**/ ?>
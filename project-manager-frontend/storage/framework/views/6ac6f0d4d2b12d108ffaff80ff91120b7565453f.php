<?php $__env->startSection('body'); ?>
    <h1>Log in to your account</h1>
    <form action="/login" method="POST">
        <?php echo csrf_field(); ?>
        <p>Email</p>
        <input type="text" name="email">
        <p>Password</p>
        <input type="password" name="password">
        <br>
        <label for="remember">Remember me</label>
        <input type="checkbox" name="remember">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fredde\Documents\GitHub\project-manager\project-manager-frontend\resources\views/login.blade.php ENDPATH**/ ?>
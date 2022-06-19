<!DOCTYPE html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sansita&display=swap" rel="stylesheet">

<link href="/css/admin.css" rel="stylesheet">
<style>
    .color
    {
        color:#F7F0D5;
    }

</style>

</head>
    <body>
    <div class="container">
    <h1 class="liwanag">liwanag</h1>
    <div class="container mt-5 p-0">
         <?php if($errors->any()): ?>
             <ul class="alert alert-warning">
                 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <li><?php echo e($error); ?></li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </ul>
        <?php endif; ?>

        <?php if(session('message1')): ?>
            <h3 class="color"><?php echo e(session('message1')); ?></h3>
       <?php endif; ?>
     </div>

    <form method="POST" action="<?php echo e(url('adminposts')); ?>">
        <?php echo csrf_field(); ?>

    <label for="AdminUsername"><b></b></label>
    <input type="text" placeholder="Admin Username" name="AdminUsername" id="AdminUsername" required><br>
    
    <label for="AdminPassword"><b></b></label>
    <input type="password" placeholder="Password" name="AdminPassword" id="AdminPassword" required><br>
  
    <button type="submit" name="Signin" class="signinbtn">Sign in</button>
    </form>
</div>


</body>
</html>
<?php /**PATH C:\Users\Kristopher\AppData\Local\GitHubDesktop\app-2.9.11\CS3A-Social-Media\resources\views/admin.blade.php ENDPATH**/ ?>
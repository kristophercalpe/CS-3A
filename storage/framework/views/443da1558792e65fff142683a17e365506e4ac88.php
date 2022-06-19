<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sansita&display=swap" rel="stylesheet">

<link href="/css/login.css" rel="stylesheet">
<style>
    .color
    {
        color:#F7F0D5;
    }
    </style>
</head>

<body>
<br><br><br>
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

     <form method="POST" action="<?php echo e(url('posts')); ?>">
        <?php echo csrf_field(); ?>
    <label for="email"><b></b></label>
    <input type="text" placeholder="Email" name="email" id="email" required><br>
    <label for="psw"><b></b></label>
    <input type="password" placeholder="Password" name="password" id="psw" required><br>
  
    <button type="submit" class="loginbtn">Login</button>
  </div>
  
  <div class="register">
    <p>No account? <a href="/register">Register now.</a></p>
  </div>
   </form>
</body>

</html>
<?php /**PATH C:\Users\Kristopher\AppData\Local\GitHubDesktop\app-2.9.11\CS3A-Social-Media\resources\views/auth/login.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Guest Book</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->


<style>
body {
    font-family: "Courier New", Courier, monospace;
    background-color: #83677b;
    color: #501B1D;
}
.container {
   background-repeat: no-repeat;
   background-position: center;
   padding: 150px 200px;
   background-color: #EDF5E1;
   border: 2px solid;
   text-align: center;
   font-weight: normal;
}
.container {
  position: relative;
  margin-top: 100px;
  margin-bottom:50px;
  max-width: 800px;
  border-color: #2E1114;
  border-radius: 50px 20px;
}
h1{
    font-size: 45px;
}
/* .... */
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

</style>
</head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 underline">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 underline">Log in</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
<div class="container">
    <h1><strong>GUEST BOOK LIST<br></strong></h1>
        <hr><br>
    <table class="styled-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Complete name</th>
            <th>Email Address</th>
            <th>Age</th>
            <th>Message</th>
        </tr>
        </thead>
    <tbody>
        <?php $__currentLoopData = $guestbook; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guestbook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td style=" background-color: rgb(7, 8, 34);"><?php echo e($guestbook->id); ?></td>
            <td style=" background-color: rgb(7, 8, 34);"><?php echo e($guestbook->full_name); ?></td>
            <td style=" background-color: rgb(7, 8, 34);"><?php echo e($guestbook->email_address); ?></td>
            <td style=" background-color: rgb(7, 8, 34);"><?php echo e($guestbook->age); ?></td>
            <td style=" background-color: rgb(7, 8, 34);"><?php echo e($guestbook->message); ?></td>
        </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
        <a href="/">
            <button type="submit" class="choice">HOMEPAGE</button>
        </a><br><br>
<div class="form-group">
    <label>Click for Another Form:</label><br>
        <a href="/guest-book-form">
    <button type="submit" class="sumbit1">Login</button>
        </a>
    <br><br><hr>
<p class="copyright">&copy;<strong>2021 Copy Right:</strong> "This Form is Use For a Registration of GUEST BOOK ONLY"</p>     
</div>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>
</html><?php /**PATH C:\jerwena_project_laravel\resources\views/gbtable.blade.php ENDPATH**/ ?>
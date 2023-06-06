<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body>
    <!-- <h1 class="font-bold underline">Daftar Makanan</h1>
    <ul>
        <?php $__currentLoopData = $makanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $makanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src=<?php echo e($makanan->gambar); ?>

        width="300" />
            <li><?php echo e($makanan->nama); ?> - Rp. <?php echo e(number_format($makanan->harga)); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul> -->
<div class="flex mt-10">
&emsp;  
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src="https://i.pinimg.com/564x/36/7a/9b/367a9bb11cbaae84f17e2b58e1b76ac0.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">SATE</div>
    <p class="text-gray-700 text-base">
    Rp 15.000
  </p>
  </div>
  
</div>
&emsp;
<div class="max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src="https://i.pinimg.com/564x/0d/1b/e2/0d1be2655e26e63a6dbcd058e0d8c652.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">RISOL</div>
    <p class="text-gray-700 text-base">
    Rp 5.000
  </p>
  </div>
  
</div>

</div>
            
</body>


</html><?php /**PATH C:\xampp\htdocs\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>
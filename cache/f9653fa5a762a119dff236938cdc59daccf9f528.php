<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App - <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
  <nav>
    <ul>
    <?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </ul>
  </nav>
  <h1><?php echo $__env->yieldContent('title'); ?></h1>
  <main>
    <?php $__env->startSection('content'); ?>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quod veritatis unde labore quos architecto provident voluptates impedit laboriosam optio ipsa, soluta ratione amet quisquam eveniet earum qui. Architecto, nemo.</p>
      <?php echo $__env->yieldSection(); ?>
  </main>
</body>
</html>
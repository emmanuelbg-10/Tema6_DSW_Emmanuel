<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
<?php if($user): ?>
<h2>Un usuario</h2>
<p><?php echo e($user['id']); ?></p>
<h3><?php echo e($user['name']); ?> - <?php echo e($user['surname']); ?></h3>
<?php else: ?>
<h2>Usuario no encontrado</h2>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__container->servers(['web' => 'root@206.189.110.154]); ?>

<?php $__container->startTask('list', ['on' => 'web']); ?>
    ls -l
<?php $__container->endTask(); ?>

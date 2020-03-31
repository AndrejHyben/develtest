<?php $__env->startSection('content'); ?>
<a href="/posts" class="btn btn-default">Back</a>
    <h1><?php echo e($post->title); ?></h1>
    <hr>
    <div>
        <?php echo e($post->body); ?> 
    </div>
    
    
    <?php if(!Auth::guest()): ?>
    <?php if(Auth::user()->id==$post->user_id): ?>
    <hr>
    <small>Written on <?php echo e($post -> created_at); ?> by <?php echo e($post -> user -> name); ?></small>
    <hr>
    <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-primary">Edit</a>

    <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']); ?>

        <?php echo e(Form::hidden('_method', 'DELETE')); ?>

        <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

    <?php echo Form::close(); ?>

    <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/unk88/test/resources/views/posts/show.blade.php ENDPATH**/ ?>
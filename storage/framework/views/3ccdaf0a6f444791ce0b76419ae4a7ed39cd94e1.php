<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.5 CRUD Tutorial With Example From Scratch </title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  </head>
  <body>
    <div class="container">
      <h2>Edit A Post</h2><br  />
      <?php if($errors->any()): ?>
      <div class="alert alert-danger">
          <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
      </div><br />
      <?php endif; ?>
      <form method="post" action="<?php echo e(action('PostController@update', $id)); ?>">
        <?php echo e(csrf_field()); ?>

        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="<?php echo e($post->title); ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="body">Body:</label>
              <input type="text" class="form-control" name="body" value="<?php echo e($post->body); ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update Post</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
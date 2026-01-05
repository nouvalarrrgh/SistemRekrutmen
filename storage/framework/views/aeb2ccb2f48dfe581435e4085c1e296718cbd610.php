<?php $__env->startSection('custom_css'); ?>
<style>
  body{
    background: rgb(70,130,180);
    background: radial-gradient(circle, rgba(70,130,180,1) 0%, rgba(129,161,187,1) 35%, rgba(243,243,243,1) 100%);
  }

  .aligncenter{
    text-align: center;
  }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="login-box">
  <div class="login-logo">
    <a href="/"> Login</a>
  </div>
  <?php if(Session::has('error')  ): ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?php echo e(Session::get('error')); ?>

    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<?php if(Session::has('status')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(Session::get('status')); ?>

    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<?php if(Session::has('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(Session::get('success')); ?>

    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan isi untuk Masuk</p>
      <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <div class="input-group mb-3">
          <input type="text" aria-label="Masukkan Email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> has-feedback" placeholder="Username atau Email" name="email" id="email" value="<?php echo e(old('email')); ?>" required>
          <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
        </div>
        <?php if($errors->has('email')): ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('email')); ?></strong>
          </span>
        <?php endif; ?>
        <div class="input-group mb-3">
          <input type="password" aria-label="Masukkan Password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?> has-feedback" placeholder="Password" name="password" id="password" required>
          <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
        </div>
        <?php if($errors->has('password')): ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('password')); ?></strong>
          </span>
        <?php endif; ?>

        <div class="row d-flex justify-content-center align-items-center">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-0 aligncenter">
        Belum Punya Akun?
        <a href="<?php echo e(route('register')); ?>" class="text-center">Daftar</a>
      </p>
      <p class="mb-0 aligncenter">
        <a href="<?php echo e(route('forget.password.get')); ?>" class="text-center">Lupa password</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugasakhir-master\resources\views/auth/login.blade.php ENDPATH**/ ?>
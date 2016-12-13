<?php $__env->startSection('content'); ?>
<body class="login-body" >
<div class="container" >
    <div class="row" >
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background:#fff;box-shadow: 3px 3px 3px #e99755;color:#35495d">
                <div class="panel-heading" style="background:#35495d; color:#ffffff"><h4>Login</h4></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                       <input type="hidden" name="_token"  value="<?php echo e(csrf_token()); ?>">
                        <?php echo csrf_field(); ?>

                        

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input type="email" style="" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input type="password" style="" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox" >
                                    <label>
                                        <input type="checkbox" style="" name="remember"> Lembre-me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="background:#35495d">
                                    <i class="fa fa-btn fa-sign-in"></i>Entrar
                                </button>

                                <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">Esqueceu-se da senha?</a>
                                <br />
                                      <a href='<?php echo e(url("login/facebook")); ?>'>Iniciar sessão com Facebook</a>
                                     <br />
                                     <a href='<?php echo e(url("login/google")); ?>'>Iniciar sessão com Google</a>
                            </div>
                        </div>
                    </form>
                    
                </div>

            </div>

        </div>
    </div>
</div>
                        <center><div class="copyright">
                                 Sistema © 2015 - 2016<br />
                        </div></center>
</body>

<style>
    
  
.btn-link{
    color:#35495d; 
}
    
    .btn-link:hover{
       color:#blue; 
    }
</style>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
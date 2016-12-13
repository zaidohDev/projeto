<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Painel</div>
                <div class="panel-body ">
                 <div class="container">
                 <div class="col-xs-6 col-md-3" >
                 <center>
                  <a class="quick-btn" href="<?php echo url('/docentes'); ?>"><i class="fa fa-pencil fa-2x"></i>
                   <h4 >Docentes</h4></a></center>
                 </div>
                 <div class="col-xs-6 col-md-3" ">
                 <center>
                  <a class="quick-btn" href="<?php echo url('/planos'); ?>"><i class="fa fa-book fa-2x"></i>
                   <h4 >Planos</h4></a></center>
                 </div>
                 <div class="col-xs-6 col-md-3" ">
                   <center>
                   <a class="quick-btn" href="#"><i class="fa fa-signal fa-2x"></i>
                   <h4 >Relatórios</h4></a></center>
                 </div>
                </div>
                </div>
            </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
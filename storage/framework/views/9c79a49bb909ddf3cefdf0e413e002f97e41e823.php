<?php $__env->startSection('content'); ?>
<div class="container"> 
    <div class="row">
        <div class="col-lg-12 margin-tb">
           <div class="pull-left">
                <h2> Show Planos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('planos.index')); ?>"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Curso:</strong>
                   <?php echo e($planos->curso); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                   <?php echo e($planos->titulo); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Conteudo:</strong>
                   <?php echo e($planos->conteudo); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Objetivo:</strong>
                   <?php echo e($planos->objetivo); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Metodologia:</strong>
                   <?php echo e($planos->metodologia); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Avaliacao:</strong>
                <?php echo e($planos->avaliacao); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Referencia:</strong>
                <?php echo e($planos->referencia); ?>

            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descricao:</strong>
                <?php echo e($planos->descricao); ?>

            </div>
        </div>
    </div>
    </div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
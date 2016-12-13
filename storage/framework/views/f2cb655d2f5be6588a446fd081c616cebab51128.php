<?php $__env->startSection('content'); ?>
<div class="class container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Criar Docente</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('docentes.index')); ?>"> Back</a>
            </div>
        </div>
    </div>
    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                   <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php echo Form::open(array('route' => 'docentes.store','method'=>'POST')); ?>


    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Nome:</strong>
                <?php echo Form::text('nome', null, array('placeholder' => 'Inserir nome','class' => 'form-control')); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sobrenome:</strong>
                <?php echo Form::text('sobrenome', null, array('placeholder'=>'Inserir sobrenome','class'=> 'form-control')); ?>

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>telefone:</strong>
                <?php echo Form::text('telefone', null, array('placeholder' =>'Inserir telefone','class' => 'form-control')); ?>

            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                <?php echo Form::text('email', null, array('placeholder' =>'Inserir email','class' => 'form-control')); ?>

            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Disciplina:</strong>
                <?php echo Form::text('disciplina', null, array('placeholder' =>'Inserir disciplina','class' => 'form-control')); ?>

            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Escola:</strong>
                <?php echo Form::text('escola', null, array('placeholder' =>'Inserir escola','class' => 'form-control')); ?>

            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Turma:</strong>
                <?php echo Form::text('turma', null, array('placeholder' =>'Inserir turma','class' => 'form-control')); ?>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
    <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
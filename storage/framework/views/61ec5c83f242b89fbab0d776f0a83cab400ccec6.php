<?php $__env->startSection('content'); ?>
<div class="class container">
 <div class="row">
  <div class="col-lg-12 margin-tb">
   <div class="pull-left">
        <h2>Editar Docente <?php echo e($docentes->nome); ?> <?php echo e($docentes->sobrenome); ?> </h2>
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

    <?php echo Form::model($docentes, ['method' => 'PATCH','route' => ['docentes.update', $docentes->id]]); ?>


    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <?php echo Form::text('nome', null, array('placeholder' => 'Nome','class' => 'form-control')); ?>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sobrenome:</strong>
                <?php echo Form::text('sobrenome', null, array('placeholder' => 'Sobrenome','class' => 'form-control')); ?>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefone:</strong>
                <?php echo Form::text('telefone', null, array('placeholder' => 'Telefone','class' => 'form-control' ,'style'=>'height:100px')); ?>

            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                <?php echo Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control' ,'style'=>'height:100px')); ?>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Disciplina:</strong>
                <?php echo Form::text('disciplina', null, array('placeholder' => 'disciplina','class' => 'form-control','style'=>'height:100px' )); ?>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Escola:</strong>
                <?php echo Form::text('escola', null, array('placeholder' => 'Escola','class' => 'form-control' ,'style'=>'height:100px' )); ?>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Turma:</strong>
                <?php echo Form::text('turma', null, array('placeholder' => 'Turma','class' => 'form-control','style'=>'height:100px')); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
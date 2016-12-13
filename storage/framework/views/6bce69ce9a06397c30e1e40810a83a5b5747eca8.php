<?php $__env->startSection('content'); ?>
<div class="class container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('planos.index')); ?>"> Back</a>
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

    <?php echo Form::open(array('route' => 'planos.store','method'=>'POST')); ?>


    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Curso:</strong>
                <?php echo Form::text('curso', null, array('placeholder' => 'Curso','class' => 'form-control')); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                <?php echo Form::text('titulo', null, array('placeholder' => 'Titulo','class' => 'form-control')); ?>

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Conteudo:</strong>
                <?php echo Form::textarea('conteudo', null, array('placeholder' =>'Conteudo','class' => 'form-control','style'=>'height:100px')); ?>

            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Objetivo:</strong>
                <?php echo Form::textarea('objetivo', null, array('placeholder' =>'Objetivo','class' => 'form-control','style'=>'height:100px')); ?>

            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Metodologia:</strong>
                <?php echo Form::textarea('metodologia', null, array('placeholder' =>'Metodologia','class' => 'form-control','style'=>'height:100px')); ?>

            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Avaliacao:</strong>
                <?php echo Form::textarea('avaliacao', null, array('placeholder' =>'Avaliacao','class' => 'form-control','style'=>'height:100px')); ?>

            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Referencia:</strong>
                <?php echo Form::textarea('referencia', null, array('placeholder' =>'Referencia','class' => 'form-control','style'=>'height:100px')); ?>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição:</strong>
                <?php echo Form::textarea('descricao', null, array('placeholder' =>'Descrição','class' => 'form-control','style'=>'height:100px')); ?>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p><strong>Data:</strong>
                 <input type="text" id="calendario" name="data_insert" /></p>
               <!--  <?php echo Form::text('data_insert', null, array('id'=>'calendario')); ?> -->
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
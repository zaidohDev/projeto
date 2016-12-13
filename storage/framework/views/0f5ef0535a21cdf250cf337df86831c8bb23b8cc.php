    <?php $__env->startSection('content'); ?>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Planos CRUD</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="#"> Criar Plano</a>
                </div>
            </div>
        </div>
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Curso</th>
                <th>Titulo</th>
                <th>Data</th>
                <th width="280px">Ação</th>
            </tr>
        <?php $__currentLoopData = $planos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
      
            <td><?php echo e($planos->id); ?></td>
  			<td><?php echo e($planos->curso); ?></td>
  			<td><?php echo e($planos->titulo); ?></td>
  			<td><?php echo e($planos->data_insert); ?></td>
           
            <td>
                <a class="btn btn-info" href="#">Show</a>
                <a class="btn btn-primary" href="#">Edit</a>
               <!--  <?php echo Form::open(['method' => 'DELETE','route' => ['productCRUD.destroy', $product->id],'style'=>'display:inline']); ?>

               <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

               <?php echo Form::close(); ?> -->
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </table>
        <?php echo $planos->render(); ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
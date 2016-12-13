<?php $__env->startSection('content'); ?>
<div class="class container" style="max-width:80%">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Lista de Docentes</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="<?php echo e(route('docentes.create')); ?>"> Criar Docente</a>
                </div>
            </div>
        </div>
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>
        <div class="table-responsive">
        <table class="table table-hover  table-striped table-hover" >
            <tr class="info" >
                <th>Id</th>
                <th>Nome</th>
                <!-- <th>Sobrenome</th>
                <th>telefone</th>
                <th>email</th> -->
                <th>disciplina</th>
                <th>escola</th>
                <th>turma</th>
                <th width="280px">Ação</th>
            </tr>
        <?php $__currentLoopData = $docentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
      
            <td><?php echo e($d->id); ?></td>
  			<td><?php echo e($d->nome); ?></td>
  			<!-- <td><?php echo e($d->Sobrenome); ?></td>
  			<td><?php echo e($d->telefone); ?></td>
  			<td><?php echo e($d->email); ?></td> -->
  			<td><?php echo e($d->disciplina); ?></td>
  			<td><?php echo e($d->escola); ?></td>
  			<td><?php echo e($d->turma); ?></td>
           
            <td>
            
                
            <a class="btn btn-info" href="<?php echo e(route('docentes.show',$d->id)); ?>">Show</a>

            <a class="btn btn-primary" href="<?php echo e(route('docentes.edit',$d->id)); ?>">Edit</a>

            <?php echo Form::open(['method' => 'DELETE','route' => ['docentes.destroy', $d->id],'style'=>'display:inline']); ?>


            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>


            <?php echo Form::close(); ?>

               
            </td>

        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </table> 
           <div class="card horizontal blue">
                 <?php echo $docentes->render(); ?>

   </div>
        </div>
        </div> 
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
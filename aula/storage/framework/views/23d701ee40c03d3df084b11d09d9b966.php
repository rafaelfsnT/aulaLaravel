<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Produtos</a>
            <a class="btn btn-success" href="<?php echo e(route('clients.index')); ?>">Ver Clientes</a>
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Descrição</td>
                        <td>Preço</td>
                        <td>Estoque</td>
                        <td>Ações</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produtos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($produtos->id); ?> </td>
                            <td>
                              <strong>  <?php echo e($produtos->nome); ?> </strong>
                            </td>
                            <td><?php echo e($produtos->descricao); ?></td>
                            <td><?php echo e($produtos->preco); ?></td>
                            <td><?php echo e($produtos->estoque); ?></td>
                            <td> <a class="btn btn-primary" href="<?php echo e(route('produtos.show', $produtos)); ?>">Visualizar</a></td>
                            <td>     <a class="btn btn-warning" href="<?php echo e(route('produtos.edit', $produtos->id)); ?>">Editar</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
            
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH /Users/unialfa/Desktop/aula/resources/views/produtos/index.blade.php ENDPATH**/ ?>
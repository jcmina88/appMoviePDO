<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Lista de alquileres</h1>
    </section>

    <section class="col-md-12 table-responsive">
    <a href="?controller=rental&method=new" class="btn btn-primary">Ir a pago</a>

        <table class="table table-hover table-dark">
            <thead class="bg-primary">
                <tr>
                    <th>Fecha de inicio</th>
                    <th>Fecha final</th>
                    <th>Costo</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($rentals as $rental) : ?>
                <tr>
                    <th><?php echo $rental->start_date ?></th>
                    <th><?php echo $rental->end_date ?></th>
                    <th><?php echo $rental->total ?></th>
                    <th><?php echo $rental->user_id ?></th>
                    <th><?php echo $rental->status_id ?></th>
                    <th>
                        <a href="?controller=rental&method=edit&id=<?php echo $rental->id; ?>"class="btn btn-light">Editar</a>
                    </th>
                    <th>
                        <a href="?controller=rental&method=delete&id=<?php echo $rental->id; ?>"class="btn btn-danger">Borrar</a>
                    </th>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </section>
</main>

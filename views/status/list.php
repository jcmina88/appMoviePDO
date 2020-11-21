<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Lista de estados</h1>    
    </section>

    <section class="col-md-12 table-responsive">
    <a href="" class="btn btn-primary">Agregar estado</a>

        <table class="table table-hover table-dark">
            <thead class="bg-primary">
                <tr>
                    <th>Nombre de estado</th>
                    <th>Clase de estado</th>
                    <th>Acción</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($statusdb as $status) : ?>
                <tr>
                    <th><?php echo $status->name ?></th>
                    <th><?php echo $status->type_status_id ?></th>
                    <th>
                        <a href=""class="btn btn-light">Editar</a>
                    </th>
                    <th>
                        <a href=""class="btn btn-danger">Borrar</a>
                    </th>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </section>
</main>
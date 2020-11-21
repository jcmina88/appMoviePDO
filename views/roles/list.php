<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Lista de roles</h1>    
    </section>

    <section class="col-md-8 table-responsive">
    <a href="?controller=rol&method=new" class="btn btn-primary">Agregar rol</a>

        <table class="table table-hover table-dark">
            <thead class="bg-primary">
                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Acción</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($roles as $rol) : ?>
                <tr>
                    <th><?php echo $rol->name ?></th>
                    <th><?php echo $rol->status_id ?></th>
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
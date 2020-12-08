<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Lista de peliculas</h1>    
    </section>

    <section class="col-md-12 table-responsive">
    <a href="?controller=movie&method=new" class="btn btn-primary">Agregar pelicula</a>

        <table class="table table-hover table-dark">
            <thead class="bg-primary">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th>Acción</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($movies as $movie) : ?>
                <tr>
                    <th><?php echo $movie->name ?></th>
                    <th><?php echo $movie->description ?></th>
                    <th><?php echo $movie->user ?></th>
                    <th><?php echo $movie->status ?></th>
                    <th>
                        <a href="?controller=movie&method=edit&id=<?php echo $movie->id; ?>" class="btn btn-light">Editar</a>
                    </th>
                    <th>
                        <a href="?controller=movie&method=delete&id=<?php echo $movie->id; ?>"class="btn btn-danger">Borrar</a>
                    </th>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </section>
</main>
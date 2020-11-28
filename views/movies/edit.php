<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Modificar pelicula</h1>
    </section>

    <section class="row mt-2">
        <div class="card w-50 m-auto">
            <div class="card-body w-100">

                    <form action="?controller=movie&method=update" method="post">

                    <input type="hidden" name="id" value="<?php echo $movie[0]->id; ?>">

                    <div class="form-group">
                        <label>Pelicula</label>
                        <input type="text" name="name" class="form-control" placeholder="Nombre de la pelicula" value="<?php echo $movie[0]->name; ?>">
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" name="description" class="form-control" placeholder="Descripción de la pelicula" value="<?php echo $movie[0]->description; ?>">
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" name="user_id" class="form-control" placeholder="Ingrese usuario" value="<?php echo $movie[0]->user_id; ?>">
                    </div>
                    <div>
                        <a href="?controller=movie" class="btn btn-light">Volver</a>
                        <button class="btn btn-primary">Modificar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
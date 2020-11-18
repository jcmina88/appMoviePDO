<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Agregar pelicula</h1>
    </section>

    <section class="row mt-2">
        <div class="card w-50 m-auto">
            <div class="card-body w-100">
                <form action="?controller=movie&method=save" method="post">
                    <div class="form-group">
                        <label>Pelicula</label>
                        <input type="text" name="name" class="form-control" placeholder="Nombre de la pelicula">
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" name="description" class="form-control" placeholder="Descripción de la pelicula">
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" name="user_id" class="form-control" placeholder="Ingrese usuario">
                    </div>
                    <div>
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
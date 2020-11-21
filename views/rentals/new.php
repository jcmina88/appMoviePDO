<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Información de pago</h1>
    </section>

    <section class="row mt-2">
        <div class="card w-50 m-auto">
            <div class="card-body w-100">
                <form action="?controller=rental&method=save" method="post">
                    <div class="form-group">
                        <label>Fecha de inicio</label>
                        <input type="datetime-local" name="start_date" class="form-control" placeholder="Nombre de la pelicula">
                    </div>
                    <div class="form-group">
                        <label>Fecha final</label>
                        <input type="datetime-local" name="end_date" class="form-control" placeholder="Descripción de la pelicula">
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" name="user_id" class="form-control" placeholder="Ingrese usuario">
                    </div>
                    <div>
                        <a href="?controller=user" class="btn btn-light">Volver</a>
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

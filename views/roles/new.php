<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Rol de usuario</h1>
    </section>

    <section class="row mt-2">
        <div class="card w-50 m-auto">
            <div class="card-body w-100">
                <form action="?controller=rol&method=save" method="post">
                    <div class="form-group">
                        <label>Rol</label>
                        <input type="text" name="name" class="form-control" placeholder="Rol de usuario">
                    </div>
                    <div class="form-group">
                        <label>Estado</label>
                        <input type="text" name="status_id" class="form-control" placeholder="Estado">
                    </div>
                    <div>
                        <a href="?controller=rol" class="btn btn-light">Volver</a>
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

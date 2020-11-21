<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Agregar tipo de estado</h1>
    </section>

    <section class="row mt-2">
        <div class="card w-50 m-auto">
            <div class="card-body w-100">
                <form action="?controller=typestatus&method=save" method="post">
                    <div class="form-group">
                        <label>Tipo de estado</label>
                        <input type="text" name="name" class="form-control" placeholder="Tipo de estado">
                    </div>
                    <div>
                        <a href="?controller=typestatus" class="btn btn-light">Volver</a>
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
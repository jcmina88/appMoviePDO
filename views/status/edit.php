<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Editar Usuario</h1>
    </section>

    <section class="row mt-2">
        <div class="card w-50 m-auto">
            <div class="card-header container">
                <h2>Información de estados</h2>
            </div>

            <div class="card-body w-100">
                <form action="?controller=status&method=update" method="post">

                    <input type="hidden" name="id" value="<?php echo $statusdb[0]->id; ?>">

                    <div class="form-group">
                        <label>Estado</label>
                        <input type="text" name="name" class="form-control" placeholder="Nombre del estado" value="<?php echo $statusdb[0]->name; ?>">
                    </div>
                    <div>
                    <a href="?controller=status" class="btn btn-light">Volver</a>
                    <button class="btn btn-primary">Modificar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>


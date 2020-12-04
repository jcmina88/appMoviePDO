<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Editar tipo de estado</h1>
    </section>

    <section class="row mt-2">
        <div class="card w-50 m-auto">
            <div class="card-header container">
                <h2>Tipo de estado</h2>
            </div>
            
            <div class="card-body w-100">
                <form action="?controller=typestatus&method=update" method="post">

                    <input type="hidden" name="id" value="<?php echo $tstatus[0]->id; ?>">

                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" placeholder="Tipo de estado" value="<?php echo $tstatus[0]->name; ?>">
                    </div>
                    <a href="?controller=typestatus" class="btn btn-light">Volver</a>
                    <button class="btn btn-primary">Modificar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
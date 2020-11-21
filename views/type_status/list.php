<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Tipos de estado</h1>    
    </section>

    <section class="col-md-12 table-responsive">
    <a href="?controller=typestatus&method=new" class="btn btn-primary">Agregar tipo de estado</a>

        <table class="table table-hover table-dark">
            <thead class="bg-primary">
                <tr>
                    <th>Nombre</th>
                    <th>Tipo de estado</th>
                    <th>Acción</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($typestatus as $tstatus) : ?>
                <tr>
                    <th><?php echo $tstatus->name ?></th>
                    <th><?php echo $tstatus->type_status_id ?></th>
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


<!-- 

type_status
General
Peliculas
Usuarios

-->


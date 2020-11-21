<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Lista de usuarios</h1>    
    </section>

    <section class="col-md-12 table-responsive">
    <a href="?controller=user&method=new" class="btn btn-primary">Crear usuario</a>

        <table class="table table-hover table-dark">
            <thead class="bg-primary">
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Estado</th>
                    <th>Rol</th>
                    <th>Acción</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user) : ?>
                <tr>
                    <th><?php echo $user->name ?></th>
                    <th><?php echo $user->email ?></th>
                    <th><?php echo $user->status_id ?></th>
                    <th><?php echo $user->rol_id ?></th>
                    <th>
                        <a href="?controller=user&method=edit&id=<?php echo $user->id; ?>" class="btn btn-light">Editar</a>
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


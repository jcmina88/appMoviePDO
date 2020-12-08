<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Agregar pelicula</h1>
    </section>

    <section class="row mt-2">
        <div class="card w-50 m-auto">
            <div class="card-body w-100">
                <!-- <form action="?controller=movie&method=save" method="post"> -->
                    <div class="form-group">
                        <label>Pelicula</label>
                        <input type="text" id="name" class="form-control" placeholder="Nombre de la pelicula">
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" id="description" class="form-control" placeholder="Descripción de la pelicula">
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <select id="rol_id" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php
                                foreach($users as $user)
                                {
                                    echo '<option value="'.$user->id.'">'.$user->name.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <label>Categorías</label>
                            <select id="category" class="form-control">
                                <option value="">Seleccione...</option>
                                <?php
                                    foreach($categories as $category)
                                    {
                                        echo '<option value="'.$category->id.'">'.$category->name.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-4 mt-4">
                            <button id="addElement" class="btn btn-secondary" id="submit">Añadir</button>
                        </div>
                    </div>

                    <div id="categories-list"></div>
                    
                    <div>
                        <a href="?controller=movie" class="btn btn-light">Volver</a>
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                <!-- </form> -->
            </div>
        </div>
    </section>
</main>

<script src="assets/js/movie.js"></script>

<main class="container">
    <section class="col-md-12 text-center my-4">
        <h1>Información de pago</h1>
    </section>

    <section class="row mt-2">
        <div class="card w-50 m-auto">
            <div class="card-body w-100">
                <form action="?controller=rental&method=update" method="post">

                    <input type="hidden" name="id" value="<?php echo $rental[0]->id; ?>">

                    <div class="form-group">
                        <label>Fecha de inicio</label>
                        <input type="datetime-local" name="start_date" class="form-control" value="<?php echo $rental[0]->start_date; ?>">
                    </div>
                    <div class="form-group">
                        <label>Fecha final</label>
                        <input type="datetime-local" name="end_date" class="form-control" value="<?php echo $rental[0]->end_date; ?>">
                    </div>
                    <div>
                    <label>Valor total</label>
                    </div>
                    <div class="form-group input-group mb-2">
                        <span class="input-group-text">$</span>
                        <input type="number" name="total" class="form-control" placeholder="Ingrese valor" value="<?php echo $rental[0]->total; ?>">
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="number" name="user_id" class="form-control" placeholder="Ingrese usuario" value="<?php echo $rental[0]->user_id; ?>">
                    </div>
                    <div>
                        <a href="?controller=user" class="btn btn-light">Volver</a>
                        <button class="btn btn-primary">Modificar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

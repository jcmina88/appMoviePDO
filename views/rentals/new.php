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
                        <input type="datetime-local" name="start_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Fecha final</label>
                        <input type="datetime-local" name="end_date" class="form-control">
                    </div>
                    <div>
                    <label>Valor total</label>
                    </div>
                    <div class="form-group input-group mb-2">
                        <span class="input-group-text">$</span>
                        <input type="number" name="total" class="form-control" placeholder="Ingrese valor">
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" name="user_id" class="form-control" placeholder="Ingrese usuario">
                    </div>
                    <div>
                        <a href="?controller=rental" class="btn btn-light">Volver</a>
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

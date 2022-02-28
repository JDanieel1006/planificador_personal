<!-- Modal -->
<div class="modal fade" id="createMdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir proyecto</h5>
            </div>
            <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data">
            @csrf
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label for="nombre_proyecto">Nombre del proyecto</label>
                            <input type="text" id="nombre_proyecto" name="nombre_proyecto" class="form-control" placeholder="" required>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="descripcion">Descripcion del proyecto</label>
                        <textarea class="form-control" id="descripcion_proyecto" name="descripcion_proyecto" rows="3" required></textarea>
                    </div>
                    <div class="my-2">
                        <label for="base_datos">Base de datos</label>
                        <select class="form-control" id="lenguaje" name="lenguaje">
                            <option selected>Escoger una base</option>
                            <option value="1">SQL Server</option>
                            <option value="2">MySQL</option>
                        </select>
                    </div>
                    <div class="my-2">
                        <label for="base_datos">Fecha inicio</label>
                        <input class="form-control tx-uppercase" id="fecha_inicio" name="fecha_inicio" type="date" required/>
                    </div>
                    <div class="my-2">
                        <label for="base_datos">Fecha fin</label>
                        <input class="form-control tx-uppercase" id="fecha_fin" name="fecha_fin" type="date" required/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" id="add_employee_btn" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

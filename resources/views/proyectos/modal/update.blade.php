<!-- Modal -->
<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar proyecto</h5>
            </div>
            <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="pro_id" id="pro_id">
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label for="fname">First Name</label>
                            <input type="text" name="edit_nombre" id="edit_nombre" class="form-control" placeholder="First Name"
                                required>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="descripcion">Descripcion del proyecto</label>
                        <textarea class="form-control" id="edit_descripcion" name="edit_descripcion" rows="3" required></textarea>
                    </div>
                    <div class="my-2">
                        <label for="base_datos">Base de datos</label>
                        <select class="form-control" id="edit_lenguaje" name="edit_lenguaje">
                            <option selected>Escoger una base</option>
                            <option value="1">SQL Server</option>
                            <option value="2">MySQL</option>
                        </select>
                    </div>
                    <div class="my-2">
                        <label for="base_datos">Fecha inicio</label>
                        <input class="form-control tx-uppercase" id="edit_fecha_inicio" name="edit_fecha_inicio" type="date" required/>
                    </div>
                    <div class="my-2">
                        <label for="base_datos">Fecha fin</label>
                        <input class="form-control tx-uppercase" id="edit_fecha_fin" name="edit_fecha_fin" type="date" required/>
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
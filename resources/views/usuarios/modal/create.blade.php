<!-- Modal -->
<div class="modal fade" id="createMdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir usuario</h5>
            </div>
            <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data">
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label for="nombre_proyecto">Nombre del proyecto</label>
                            <input type="text" name="crt_nombre" class="form-control" placeholder="" required>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="descripcion">Correo</label>
                        <input type="email" name="crt_correo" class="form-control" placeholder="" required>
                    </div>
                    <div class="my-2">
                        <label for="base_datos">Tipo de usuario</label>
                        <select class="form-control">
                            <option selected>Seleccionar una opcion</option>
                            <option value="1">Administrador</option>
                            <option value="2">Trabajador</option>
                        </select>
                    </div>
                    <div class="my-2">
                        <label for="base_datos">Telefono</label>
                        <input class="form-control tx-uppercase" id="fecha_inicio" type="number" name="fecha_inicio" required/>
                    </div>
                    <div class="my-2">
                        <label for="avatar">Select Avatar</label>
                        <input type="file" name="avatar" class="form-control" required>
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

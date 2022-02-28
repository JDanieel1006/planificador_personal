<!-- Modal -->
<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar usuario</h5>
            </div>
            <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="user_id" id="user_id">
                <input type="hidden" name="user_avatar" id="user_avatar">
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label for="nombre_proyecto">Nombre del usuario</label>
                            <input type="text" id="edit_nombre" name="edit_nombre" class="form-control" placeholder="" required>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="descripcion">Correo</label>
                        <input type="email" id="edit_correo" name="edit_correo" class="form-control" placeholder="" required>
                    </div>
                    <div class="my-2">
                        <label for="base_datos">Telefono</label>
                        <input class="form-control tx-uppercase" id="edit_telefono" name="edit_telefono"  type="number" required/>
                    </div>
                    <div class="my-2">
                        <label for="base_datos">Contraseña</label>
                        <input class="form-control tx-uppercase" id="edit_passwd" name="edit_passwd" type="password"  required/>
                    </div>
                    <div class="my-2">
                        <label for="base_datos">Tipo de usuario</label>
                        <select class="form-control" id="edit_tipo" name="edit_tipo">  
                            <option selected>Seleccionar una opcion</option>
                            <option value="1">Administrador</option>
                            <option value="2">Trabajador</option>
                        </select>
                    </div>
                    
                    <div class="my-2">
                        <label for="avatar">Select Avatar</label>
                        <input type="file" name="avatar" class="form-control">
                    </div>
                    <div class="mt-2" id="avatar">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" id="edit_employee_btn" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
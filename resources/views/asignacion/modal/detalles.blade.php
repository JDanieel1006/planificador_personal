<!-- Modal -->
<div class="modal fade" id="detalleProyecto" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalles del proyecto</h5>
            </div>
            <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="pro_id" id="pro_id">
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label for="fname">Nombre del proyecto</label>
                            <input type="text" name="edit_nombre" id="edit_nombre" class="form-control" placeholder=""
                            readonly>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="descripcion">Descripcion del proyecto</label>
                        <textarea class="form-control" id="edit_descripcion" name="edit_descripcion" rows="3" readonly></textarea>
                    </div>
                    <div class="my-2">
                        <label for="base_datos">Base de datos</label>
                        <select class="form-control" id="edit_lenguaje" name="edit_lenguaje" disabled>
                            <option selected>Escoger una base</option>
                            <option value="1">SQL Server</option>
                            <option value="2">MySQL</option>
                        </select>
                    </div>
                    <div class="my-2">
                        <label for="base_datos">Fecha inicio</label>
                        <input class="form-control tx-uppercase" id="edit_fecha_inicio" name="edit_fecha_inicio" type="date" readonly/>
                    </div>
                    <div class="my-2">
                        <label for="base_datos">Fecha fin</label>
                        <input class="form-control tx-uppercase" id="edit_fecha_fin" name="edit_fecha_fin" type="date" readonly/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
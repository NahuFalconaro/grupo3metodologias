<div class="modal" tabindex="-1" id="myPopUp">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"> Editar Material </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="updateMaterial/{$materiales->id_material}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-label"> Material: </label>
                        <input type="text" class="form-group" value="{$materiales->nombre}" name="nombre" placeholder="Material" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label"> Aceptado 1 Si 0 No: </label>
                        <input type="number" min="0" max="1" value="{$materiales->aceptado}" class="form-group" id="" name="aceptado"
                            placeholder="Aceptado" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label"> Descripcion: </label>
                        <input type="text" max="200" value="{$materiales->descripcion}" class="form-group" id="" name="descripcion"
                            placeholder="Descripcion">
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
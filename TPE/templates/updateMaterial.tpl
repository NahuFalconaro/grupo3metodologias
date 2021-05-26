{* Si no saco esto no me muestra el form *}

{* <div class="modal" tabindex="-1" id="myPopUp">
    <div class="modal-dialog">
        <div class="modal-content"> *}
<div class="modal-header">
    <h5 class="modal-title"> Editar Material </h5>
    <button type="button" class="btn-close popup_close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <form action="updateMaterial/" method="POST" enctype="multipart/form-data" id="popup_form">
        <div class="form-group">
            <label class="form-label"> Material: </label>
            <input type="text" class="form-group" id="popup_name" name="nombreUpdate" placeholder="Material" required>
        </div>
        <div class="form-group">
            <label class="form-label"> Aceptado 1 Si 0 No: </label>
            <input type="number" min="0" max="1" id="popup_accepted" class="form-group" name="aceptadoUpdate"
                placeholder="Aceptado" required>
        </div>
        <div class="form-group">
            <label class="form-label"> Descripcion: </label>
            <input type="text" max="200" id="popup_description" class="form-group" name="descripcionUpdate"
                placeholder="Descripcion">
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary popup_close" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
</div>
{* </div>
    </div>
</div> *}
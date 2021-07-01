<div class="modal-header">
    <h5 class="modal-title" id="user_title"> Agregar usuario </h5>
    <button type="button" class="btn-close popup_close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <form action="" method="POST" enctype="multipart/form-data" id="popup_form">
        <div class="form-group">
            <label class="form-label"> DNI: </label>
            <input type="text" class="form-group" id="user_dni" name="dni" placeholder="DNI" required>
        </div>
        <div class="form-group">
            <label class="form-label"> Nombre: </label>
            <input type="text" id="user_name" class="form-group" name="nombre"
                placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label class="form-label"> Rol: </label>
            <input type="text" id="user_role" class="form-group" name="user_role"
                placeholder="Rol">
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary popup_close" data-bs-dismiss="modal" id="popup_close">Cerrar</button>
            <button type="submit" class="btn btn-primary" id="popup_save">Guardar</button>
        </div>
    </form>
</div>
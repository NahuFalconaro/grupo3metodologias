<div class="modal-header">
    <h5 class="modal-title" id="user_title"> Agregar usuario </h5>
    <button type="reset" class="btn-close popup_close" data-bs-dismiss="modal" aria-label="Close"></button>
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
            <label class="form-label"> Apellido: </label>
            <input type="text" id="user_apellido" class="form-group" name="apellido"
                placeholder="Apellido" required>
        </div>
        <div class="form-group">
            <label class="form-label"> Telefono: </label>
            <input type="number" id="phone" class="form-group" name="telefono"
                placeholder="Telefono" required>
        </div>
        <div class="form-group">
            <label class="form-label"> E-mail: </label>
            <input type="text" id="email" class="form-group" name="email"
                placeholder="E-mail" required>
        </div>
        <div class="form-group">
            <label class="form-label"> Direccion: </label>
            <input type="text" id="direccion" class="form-group" name="direccion"
                placeholder="Direccion" required>
        </div>
        <div class="form-group">
            <label class="form-label"> Fecha de nacimiento: </label>
            <input type="text" id="fecha_nacimiento" class="form-group" name="fecha_nacimiento"
                placeholder="Fecha de nacimiento" required>
        </div>
        <div class="form-group">
        <label class="form-label"> Vehiculo: </label>
            <select name="clase_vehiculo" id="vehiculo-requerido" class="form-group" required>
                <option value="a"> Carrito </option>
                <option value="b"> Auto </option>
                <option value="c"> Camioneta </option>
                <option value="d"> Camion </option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label"> Rol: </label>
            <select name="user_role" id="user_role" class="form-group" required>
                <option value="cartonero"> cartonero </option>
            </select>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary popup_close" data-bs-dismiss="modal" id="popup_close">Cerrar</button>
            <button type="submit" class="btn btn-primary" id="popup_save">Guardar</button>
        </div>
    </form>
</div>
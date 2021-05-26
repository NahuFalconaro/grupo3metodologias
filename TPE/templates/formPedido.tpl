{include file="header.tpl"}
<div class="banner">
        <div class="banner__text">
            <h3>Servicio Metodologia Grupo 3</h3>
            <p id='pagina' class="pagina">Contacta nuestros servicios</p>
        </div>
    </div>
<div class="contains-fluid contactanos">
    <div class="form">
        <div class="row">
            <div class="title-tpl">
                <h3>Contacta nuestros servicios</h3>
            </div>
            <div class="col-7">
                <form class="row " enctype="multipart/form-data" action="submitForm" method="post">
                    <input type="hidden" id="" name="id_pedido">
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <input type="text" class="form-control" id="" name="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" id="" name="apellido" placeholder="Apellido"
                                required>
                        </div>
                    </div>
                    <div class="row justify-content-start ">
                        <div class="col-6">
                            <input type="tel" class="form-control" id="" name="telefono" placeholder="Telefono"
                                required>
                        </div>
                        <div class="col-6">
                            <input type="time" class="form-control" id="" name="franja_horaria"
                                placeholder="Franja horaria" required>
                        </div>
                    </div>
                    <div class="row justify-content-start ">
                        <div class="col-6">
                            <select name="clase_vehiculo" id="vehiculo-requerido" class="form-select" required>
                                <option value="a"> Carrito </option>
                                <!--creo que es asi el value-->
                                <option value="b"> Auto </option>
                                <option value="c"> Camioneta </option>
                                <option value="d"> Camion </option>
                            </select>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" id="" name="direccion" placeholder="Dirección"
                                required>
                        </div>
                    </div>
                    <div class="row justify-content-start ">
                        <div class="col-12">
                            <input type="file" class="form-control" name="foto" placeholder="Imagen">
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-2">
                        <button class="btn btn-primary" type="submit"> Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-4 contacto_acopio">
                <div class="col-6">
                    <h4> Telefono </h4>
                    <span class="fi-phone"></span>
                    <h5>0800-123-acopio</h5>
                </div>
                <div class="col-6">
                    <h4> Direccion </h4>
                    <h5> Calle falsa 123</h5>
                </div>
            </div>
        </div>
    </div>
</div>
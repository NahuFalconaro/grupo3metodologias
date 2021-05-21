<div class="contains-fluid contactanos">
    <div class="form-pedido">
        <div class="row">
            <div class="col-6">
                <form class="row " onsubmit="savePedido()">
                    <!--metodo de js para guardar pedido-->
                    <input type="hidden" id="" name="id_pedido" value="{$pedido['id_pedido']}">
                    <div class="row justify-content-start">
                        <div class="col-5">
                            <input type="text" class="form-control" value="{$pedido['nombre']}" placeholder="Nombre"
                                aria-label="Firts name">
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" value="{$pedido['apellido']}" placeholder="Apellido"
                                aria-label="Last name">
                        </div>
                    </div>
                    <div class="row justify-content-start ">
                        <div class="col-5">
                            <input type="tel" class="form-control" value="{$pedido['telefono']}" placeholder="Telefono"
                                aria-label="phone">
                        </div>
                        <div class="col-5">
                            <input type="time" class="form-control" value="{$pedido{'franja_horaria'}}"
                                placeholder="Franja horaria" aria-label="time">
                        </div>
                    </div>
                    <div class="row justify-content-start ">
                        <div class="col-5">
                            <select name="vehiculo" value="{$pedido['clase_vehiculo']}" id="vehiculo-requerido"
                                class="form-select">
                                <option value="a"> Carrito </option>
                                <!--creo que es asi el value-->
                                <option value="b"> Auto </option>
                                <option value="c"> Camioneta </option>
                                <option value="d"> Camion </option>
                            </select>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" value="{$pedido['direccion']}"
                                placeholder="Dirección" aria-label="Address">
                        </div>
                    </div>
                    <div class="row justify-content-start ">
                        <div class="col-10">
                            <input type="file" class="form-control" value="{$pedido['foto']}" placeholder="Imagen"
                                aria-label="Imagen">
                        </div>
                    </div>
                    <div class="row justify-content-start "></div>
                    <div class="d-grid gap-2 col-2">
                        <button class="btn btn-primary" type="submit"> enviar</button>
                    </div>

                </form>
            </div>
            <div class="col-5">
                <div class="col-5">
                    <h4> Telefono </h4>
                    <h5> 0800-123-acopio</h5>
                </div>
                <div class="col-5">
                    <h4> Direccion </h4>
                    <h5> Calle falsa 123</h5>
                </div>
            </div>
        </div>
    </div>
</div>
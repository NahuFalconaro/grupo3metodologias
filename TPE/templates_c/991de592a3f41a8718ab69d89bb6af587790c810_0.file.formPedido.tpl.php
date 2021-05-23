<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-23 21:29:34
  from 'C:\xampp1\htdocs\grupo3metodologias\TPE\templates\formPedido.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aaad1ebe30a6_73578385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '991de592a3f41a8718ab69d89bb6af587790c810' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\grupo3metodologias\\TPE\\templates\\formPedido.tpl',
      1 => 1621798170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.tpl' => 1,
  ),
),false)) {
function content_60aaad1ebe30a6_73578385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="contains-fluid contactanos">
    <div class="form-pedido">
        <div class="row">
            <div class="col-7">
                <form class="row " enctype="multipart/form-data" action="submitForm" method="post">
                    <input type="hidden" id="" name="id_pedido">
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <input type="text" class="form-control" id="" name="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" id="" name="apellido" placeholder="Apellido" required>
                        </div>
                    </div>
                    <div class="row justify-content-start ">
                        <div class="col-6">
                            <input type="tel" class="form-control" id="" name="telefono" placeholder="Telefono" required>
                        </div>
                        <div class="col-6">
                            <input type="time" class="form-control" id="" name="franja_horaria" placeholder="Franja horaria" required>
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
                            <input type="text" class="form-control" id="" name="direccion" placeholder="Dirección" required>
                        </div>
                    </div>
                    <div class="row justify-content-start ">
                        <div class="col-12">
                            <input type="file" class="form-control" name="foto" placeholder="Imagen">
                        </div>
                    </div>
                    <div class="row justify-content-start "></div>
                    <div class="d-grid gap-2 col-2">
                        <button class="btn btn-primary" type="submit"> enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-4 contacto_acopio">
                <div class="col-6">
                    <h4> Telefono </h4>
                    <h5> 0800-123-acopio</h5>
                </div>
                <div class="col-6">
                    <h4> Direccion </h4>
                    <h5> Calle falsa 123</h5>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-22 21:36:39
  from 'C:\xampp1\htdocs\grupo3metodologias\TPE\templates\formPedido.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60a95d47e6e8f6_48043754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '991de592a3f41a8718ab69d89bb6af587790c810' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\grupo3metodologias\\TPE\\templates\\formPedido.tpl',
      1 => 1621712190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a95d47e6e8f6_48043754 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contains-fluid contactanos">
    <div class="form-pedido">
        <div class="row">
            <div class="col-6">
                <form class="row " enctype="multipart/form-data" onsubmit="savePedido(this, event)">
                    <input type="hidden" id="" name="id_pedido" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value['id_pedido'];?>
">
                    <div class="row justify-content-start">
                        <div class="col-5">
                            <input type="text" class="form-control" id="" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value['nombre'];?>
" placeholder="Nombre" required>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" id="" name="apellido" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value['apellido'];?>
" placeholder="Apellido" required>
                        </div>
                    </div>
                    <div class="row justify-content-start ">
                        <div class="col-5">
                            <input type="tel" class="form-control" id="" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value['telefono'];?>
" placeholder="Telefono" required>
                        </div>
                        <div class="col-5">
                            <input type="time" class="form-control" id="" name="horario" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value['franja_horaria'];?>
" placeholder="Franja horaria" required>
                        </div>
                    </div>
                    <div class="row justify-content-start ">
                        <div class="col-5">
                            <select name="vehiculo" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value['clase_vehiculo'];?>
" id="vehiculo-requerido" class="form-select" required>
                                <option value="a"> Carrito </option>
                                <!--creo que es asi el value-->
                                <option value="b"> Auto </option>
                                <option value="c"> Camioneta </option>
                                <option value="d"> Camion </option>
                            </select>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" id="" name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value['direccion'];?>
" placeholder="Dirección" required>
                        </div>
                    </div>
                    <div class="row justify-content-start ">
                        <div class="col-10">
                            <input type="file" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value['foto'];?>
" placeholder="Imagen">
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
</div><?php }
}

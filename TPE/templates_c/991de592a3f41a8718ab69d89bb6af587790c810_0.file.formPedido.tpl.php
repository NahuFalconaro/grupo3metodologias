<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-21 22:52:15
  from 'C:\xampp1\htdocs\grupo3metodologias\TPE\templates\formPedido.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60a81d7f34f1d6_99140768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '991de592a3f41a8718ab69d89bb6af587790c810' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\grupo3metodologias\\TPE\\templates\\formPedido.tpl',
      1 => 1621625424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a81d7f34f1d6_99140768 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contains-fluid contactanos">
    <div class="form-pedido">
        <div class="row">
            <div class="col-6">
                <form class="row " onsubmit="savePedido()">
                    <!--metodo de js para guardar pedido-->
                    <input type="hidden" id="" name="id_pedido" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value['id_pedido'];?>
">
                    <div class="row justify-content-start">
                        <div class="col-5">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value['nombre'];?>
" placeholder="Nombre"
                                aria-label="Firts name">
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value['apellido'];?>
" placeholder="Apellido"
                                aria-label="Last name">
                        </div>
                    </div>
                    <div class="row justify-content-start ">
                        <div class="col-5">
                            <input type="tel" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value['telefono'];?>
" placeholder="Telefono"
                                aria-label="phone">
                        </div>
                        <div class="col-5">
                            <input type="time" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pedido'.('franja_horaria')]->value;?>
"
                                placeholder="Franja horaria" aria-label="time">
                        </div>
                    </div>
                    <div class="row justify-content-start ">
                        <div class="col-5">
                            <select name="vehiculo" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value['clase_vehiculo'];?>
" id="vehiculo-requerido"
                                class="form-select">
                                <option value="a"> Carrito </option>
                                <!--creo que es asi el value-->
                                <option value="b"> Auto </option>
                                <option value="c"> Camioneta </option>
                                <option value="d"> Camion </option>
                            </select>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value['direccion'];?>
"
                                placeholder="Dirección" aria-label="Address">
                        </div>
                    </div>
                    <div class="row justify-content-start ">
                        <div class="col-10">
                            <input type="file" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value['foto'];?>
" placeholder="Imagen"
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
</div><?php }
}

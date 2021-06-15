{include file="header.tpl"}

<div class="banner">
    <div class="banner__text">
        <h3>Servicio Metodologia Grupo 3</h3>
        <p id='pagina' class="pagina">Direcciones</p>
    </div>
</div>
<div class="contains-fluid materiales">
    <div class="tabla-materiales form">
        <div class="row">
            <div class="title-tpl">
                <h3>Vista de direcciones indexadas en sistema.</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> Dirección </th>
                        <th scope="col"> Clase de vehículo requerido </th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$Pedidos item=pedido}
                        <tr>
                            <td>{$pedido->ubicacion}</td>
                            {if $pedido->clase_vehiculo eq "a"}
                                <td>Carrito (a)</td>
                            {elseif $pedido->clase_vehiculo eq "b"}
                                <td>Auto (b)</td>
                            {elseif $pedido->clase_vehiculo eq "c"}
                                <td>Camioneta (c)</td>
                            {else}
                                <td>Camión (d)</td>
                            {/if}
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>
{include file="footer.tpl"}
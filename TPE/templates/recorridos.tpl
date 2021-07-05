{include file="header.tpl"}

<div class="banner">
    <div class="banner__text">
        <h3>Servicio Metodologia Grupo 3</h3>
        <p id='pagina' class="pagina">Recorridos</p>
    </div>
</div>
<div class="contains-fluid materiales">
    <div class="tabla-materiales form">
        <div class="row">
            <div class="title-tpl">
                <h3>Vista de recorridos indexados en sistema.</h3>
            </div>
            {foreach from=$lista item=cartonero}
                <h4>{$cartonero[1]}, DNI {$cartonero[0]}</h4>
                <table class="table">
                    {* <thead>
                        <tr>
                            <th scope="col"> Dirección </th>
                            <th scope="col"> Clase de vehículo requerido </th>
                            <th scope="col"> Horario </th>
                        </tr>
                    </thead> *}
                    {foreach from=$cartonero[2] item=pedido}
                        <tbody>
                            <tr>
                                <td>{$pedido->ubicacion}</td>
                                {if $pedido->clase_vehiculo eq "a"}
                                    <td>Carrito</td>
                                {elseif $pedido->clase_vehiculo eq "b"}
                                    <td>Auto</td>
                                {elseif $pedido->clase_vehiculo eq "c"}
                                    <td>Camioneta</td>
                                {else}
                                    <td>Camión</td>
                                {/if}
                                <td>{$pedido->franja_horaria}</td>
                            </tr>
                        </tbody>
                    {/foreach}
                </table>
            {/foreach}
        </div>
    </div>
</div>
{include file="footer.tpl"}
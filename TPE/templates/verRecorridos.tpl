{include file="header.tpl"}

<div class="banner">
    <div class="banner__text">
        <h3>Servicio Metodologia Grupo 3</h3>
        <p id='pagina' class="pagina">Recorridos en Sistema</p>
    </div>
</div>
<div class="contains-fluid materiales">
    <div class="tabla-materiales form">
        <div class="row">
            <div class="title-tpl">
                <h3>Pantalla de recorridos en el sistema</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> Ubicación </th>
                        <th scope="col"> Clase de vehículo requerido </th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$Pedidos item=pedido}
                        <tr>
                            <td>{$pedido->ubicacion}</td>
                            <td>{$pedido->clase_vehiculo}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>
{include file="footer.tpl"}
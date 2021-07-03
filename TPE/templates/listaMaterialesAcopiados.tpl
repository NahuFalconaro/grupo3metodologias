
{include file="header.tpl"}
<div class="banner">
    <div class="banner__text">
        <h3>Servicio Metodologia Grupo 3</h3>
        <p id='pagina' class="pagina">Registro de materiales por cartoneros</p>
    </div>
</div>
<div class="contains-fluid materiales">
    <div class="tabla-materiales form">
        <div class="row">
            <div class="title-tpl">
                <h3>Materiales acopiados por cartoneros</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> Cartonero </th>
                        <th scope="col"> Material </th>
                        <th scope="col"> Peso </th>
                    </tr>
                </thead>
                <tbody>
                {foreach from=$Materiales item=material}
                    <tr>
                        <td>{$material->cartonero}</td>
                        <td>{$material->material}</td>
                        <td>{$material->peso}</td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>
{include file="footer.tpl"}

{include file="header.tpl"}
<!-- Hascer otro template de material, donde uno se pueda editar y este oculto 
y el otro sea visible para todos y saber q material es aceptado-->
<div class="edit_popup hidden">
    {include file="updateMaterial.tpl"}
</div>
<div class="banner">
        <div class="banner__text">
            <h3>Servicio Metodologia Grupo 3</h3>
            <p id='pagina' class="pagina">Cartelera informativa</p>
        </div>
    </div>
<div class="contains-fluid materiales">
    <div class="tabla-materiales form">
        <div class="row">
            <div class="title-tpl">
                <h3>Cartelera informativa de materiales aceptados</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> Materiales </th>
                        <th scope="col"> Aceptado </th>
                        <th scope="col"> Descripcion de entrega </th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$Materiales item=material}
                        <tr>
                            <td>{$material->nombre}</td>
                            <td id="{$material->aceptado}">{if $material->aceptado == 0} SI {else} NO {/if}</td>
                            <td>{$material->descripcion}</td>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>
{include file="footer.tpl"}
<script src="js/popup.js"></script>
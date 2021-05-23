{include file="index.tpl"}
<div class="contains-fluid materiales">
    <div class="tabla-materiales">
        <div class="row">
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
                        <td>{if $material->aceptado == 1} SI {else} NO {/if}</td>
                        <td>{$material->descripcion}</td>
                       {if $Logged == 1} <!-- si esta log la secretaria-->
                            <td><a href="updateMaterial/{$material->id_material}">Editar</a> </td>
                            <td><a href="deleteMaterial/{$material->id_material}">Borrar</a> </td>
                       {/if}
                    </tr>
                {/foreach}
            </tbody>
            </table>
        </div>
    </div>
</div>
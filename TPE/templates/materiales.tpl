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
            </table>
            <tbody>
                {foreach from=$materiales item=material}
                    <tr {$material->id_material}>
                        <td>{$material->nombre}</td>
                        <td>{$material->aceptado}</td>
                        <td>{$material->descripcion}</td>
                        {if} <!--si esta log la secretaria-->
                            <td><a href=" /{$material->id_material}">Editar</a> </td>
                            <td><a href=" /{$material->id_material}">Borrar</a> </td>
                        {/if}
                    </tr>
                {/foreach}
            </tbody>
        </div>
    </div>
</div>
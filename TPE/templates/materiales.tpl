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
            {{foreach from=$ item=item key=key name=name}
                
            {/foreach}}
            </tbody>
        </div>
    </div>
</div>
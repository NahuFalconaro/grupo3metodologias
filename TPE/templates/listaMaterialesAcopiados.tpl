{include file="header.tpl"}
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
                        <td>{$material->id_usuario->nombre}</td>
                        <td>{$material->peso}</td>
                        <td>{$material->id_materiales->nombre}</td>
                    </tr>
                {/foreach}
                </tbody>
{include file="footer.tpl"}
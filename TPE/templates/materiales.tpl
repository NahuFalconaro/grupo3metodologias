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
                            {if $Logged == 1}
                                <td><a href="updateMaterial/{$material->id_material}" id="editMaterial">Editar</a>
                                    <!-- onclick="window.open(this.href, 'targetWindow',
                                'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=SomeSize, height=SomeSize')"-->
                                </td>
                                <td><a href="deleteMaterial/{$material->id_material}" id="deleteMaterial">Borrar</a> </td>
                            {/if}
                        </tr>
                    {/foreach}
                </tbody>
            </table>
            <!--si esta log la secretaria-->
                <div class="col-7">
                    <form class=" row " enctype=" multipart/form-data" action="insertMaterial" method="post">
                        <input type="hidden" id="" name="id_materiales">
                        <div class="row justify-content-start">
                            <div class="col-6">
                                <label class="form-label"> Material: </label>
                                <input type="text" class="form-control" id="" name="nombre" placeholder="Material" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label"> Aceptado 1 Si 0 No: </label>
                                <input type="number" min="0" max="1" class="form-control" id="" name="aceptado"
                                    placeholder="Aceptado" required>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-12">
                                <label class="form-label"> Descripcion: </label>
                                <input type="text" max="200" class="form-control" id="" name="descripcion"
                                    placeholder="Descripcion">
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-2">
                            <button class="btn btn-primary" type="submit"> enviar</button>
                        </div>
                    </form>
                </div>
            <!---->
        </div>
    </div>
</div>
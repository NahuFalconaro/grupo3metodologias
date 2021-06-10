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
                            <td id="{$material->aceptado}">{if $material->aceptado == 1} SI {else} NO {/if}</td>
                            <td>{$material->descripcion}</td>
                            <!--{if $Logged == 0}-->
                                <td><button class="edit_btn btn btn-link" id="{$material->id_materiales}">Editar</button> </td>
                                <td><a href=" deleteMaterial/{$material->id_materiales}" id="deleteMaterial">Borrar</a>
                              <!--  {/if}-->
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
            <!--si esta log la secretaria-->
            <!--{if $Logged == 0}-->
                <div class="col-7 form form-add-material">
                    <h3>Agregar Material</h3>
                    <form class=" row " enctype=" multipart/form-data" action="insertMaterial" method="post">
                        <input type="hidden" id="" name="id_materiales">
                        <div class="row justify-content-start">
                            <div class="col-6">
                                <label class="form-label"> Material: </label>
                                <input type="text" class="form-control" id="" name="nombre" placeholder="Material" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label"> Aceptado 1 Si 0 No: </label>
                                <input type="number" min="0" max="0" class="form-control" id="" name="aceptado"
                                    placeholder="Aceptado" required>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-02">
                                <label class="form-label"> Descripcion: </label>
                                <input type="text" max="200" class="form-control" id="" name="descripcion"
                                    placeholder="Descripcion">
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-2">
                            <button class="btn btn-primary" type="submit"> Enviar</button>
                        </div>
                    </form>
                </div>
        <!--  {/if}-->
        </div>
    </div>
</div>
{include file="footer.tpl"}
<script src="js/popup.js"></script>
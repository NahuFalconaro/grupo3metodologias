{include file="header.tpl"}
<div class="banner">
    <div class="banner__text">
        <h3>Servicio Metodologia Grupo 3</h3>
        <p id='pagina' class="pagina">Registrar Peso de Materiales</p>
    </div>
</div>
<div class="contains-fluid">
    <div class="row form">
        <div class="title-tpl">
            <h3>Registra el peso del material</h3>
        </div>
        <div class="row justify-content-end">
            <form form class="row col-4" enctype="multipart/form-data" action="insertMaterialTraido" method="post">
                <div class="col-8 col-balanza">
                    <label for="formGroupExampleInput" class="form-label">Usuario:</label>
                    <select name="rol" id="rol" class="form-select rol">
                        <option value="0">Vecino Buena onda</option>
                        <option value="1">Cartonero</option>
                    </select>
                </div>
                <div class="col-8 col-balanza">
                    <label for="formGroupExampleInput" class="form-label">Seleccionar material:</label>
                    <select name="id_materialTraido" id="" class="form-select">
                        {foreach from=$Materiales item=Material}
                            <option value="{$Material->id_materiales}" >{$Material->nombre}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="col-8 col-balanza">
                    <label for="formGroupExampleInput" class="form-label" >Peso del material:</label>
                    <input type="number" id="peso" class="form-control"  min="0" name="pesoTraido" placeholder="Kg">
                </div>
                <div id="div_cartonero" class="col-8 col-balanza hidden">
                    <label for="formGroupExampleInput" class="form-label">Id Cartonero:</label>
                    <input type="number" id="id_cartonero" class="form-control" min="1" name="id_usuario" placeholder="IdCartonero">
                </div>
                <div class="d-grid gap-2 col-2">
                    <button class="btn btn-primary" type="submit"> Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/materialTraido.js"></script>
{include file="footer.tpl"}


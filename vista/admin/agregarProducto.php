
<form action="#" method="POST" id="frmAgregarProd" name="frmAgregarProd" accept-charset="utf-8">

    <fieldset>
        <legend>Productos</legend>
        <input type="hidden" name="id_producto" value="#">
        <label for="cod_barras">Código de Barras</label>
        <input type="text" name="cod_barras" placeholder="Código de Barras" required>

        <label for="nombre_producto">Nombre del Producto</label>
        <input type="text" name="nombre_producto" placeholder="Nombre del Producto" required>

        <label for="descripcion">Descrición</label>
        <textarea name="descripcion"></textarea>

        <label for="cantidad">Cantidad</label>
        <input type="number" name="cantidad" placeholder="Cantidad" required>

        <label for="precio_unitario">Precio Unitario</label>
        <input type="text" name="precio_unitario" placeholder="Precio Unitario" required>

        <label for="descuento">Descuento</label>
        <input type="text" name="descuento" placeholder="Descuento" required>

        <label for="id_proveedor">Id Proveedor</label>
        <input type="number" name="id_proveedor" placeholder="Id Proveedor" required>      

    </fieldset>

    <input class="#" type="submit" value="Agregar" name="registrarProd">
    <a class="#" href="#">Regresar</a>
    
</form>
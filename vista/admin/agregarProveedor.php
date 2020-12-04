<?php 
    require_once "dashboard_header.php";
 ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">   
            <h1 class="mt-4"><?php echo $data["titulo"]; ?></h1>

            <form action="principal.php?c=controlador&a=guardarProveedor" method="POST" id="frmAgregarProve" name="frmAgregarProve" accept-charset="utf-8">

                <fieldset>
                    <legend>Proveedores</legend>
                    <input type="hidden" name="id_proveedor" value="#">

                    <label for="nombre_proveedor">Nombre del Proveedor</label>
                    <input type="text" name="nombre_proveedor" placeholder="Nombre del Proveedor" required>

                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" placeholder="Dirección" required>

                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" placeholder="Telefono" required>

                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Email" required>    

                </fieldset>

                <input class="#" type="submit" value="Agregar" name="registrarProve">
                <a class="#" href="principal.php?c=controlador&a=muestraProveedores">Regresar</a>
                
            </form>

        </div>
    </main>
</div>


<?php 
    require_once "dashboard_footer.php";
 ?>
<?php 
    require_once "dashboard_header.php";
 ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">   
            <h1 class="mt-4"><?php echo $data["titulo"]; ?></h1>

            <form action="principal.php?c=controlador&a=guardarServicio" method="POST" id="frmAgregarServ" name="frmAgregarServ" accept-charset="utf-8">

                <fieldset>
                    <legend>Servicios</legend>
                    <input type="hidden" name="id_servicio" value="">

                    <label for="nombre_servicio">Nombre del Servicio</label>
                    <input type="text" name="nombre_servicio" placeholder="Nombre del Servicio" required>

                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion"></textarea>

                    <label for="precio">Precio</label>
                    <input type="text" name="precio" placeholder="Precio" required>

                    <label for="descuento">Descuento</label>
                    <input type="text" name="descuento" placeholder="Descuento" required>    

                </fieldset>

                <input class="#" type="submit" value="Agregar" name="registrarServ">
                <a class="#" href="principal.php?c=controlador&a=muestraServicios">Regresar</a>
                
            </form>

        </div>
    </main>
</div>


<?php 
    require_once "dashboard_footer.php";
 ?>
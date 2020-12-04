<?php 
    require_once "dashboard_header.php";
 ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">   
            <h1 class="mt-4"><?php echo $data["titulo"]; ?></h1>

            <form action="principal.php?c=controlador&a=guardarUsuario" method="POST" id="frmAgregarUsu" name="frmAgregarUsu" accept-charset="utf-8">

                <fieldset>
                    <legend>Usuarios</legend>
                    <input type="hidden" name="id_usuario" value="#">

                    <label for="tipo">Tipo</label>
                    <select name="tipo">
                    	<option value="Admin">Administrador</option>
                    	<option value="Vendedor">Vendedor</option>
                    </select>

                    <label for="nombre_usuario">Nombre del Usuario</label>
                    <input type="text" name="nombre_usuario" placeholder="nombre_usuario" required>

                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Email" required>

                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" placeholder="Dirección" required> 

                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" placeholder="Teléfono" required> 

                    <label for="pass">Contraseña</label>
                    <input type="text" name="pass" placeholder="Contraseña" required>    

                </fieldset>

                <input class="#" type="submit" value="Agregar" name="registrarUsu">
                <a class="#" href="principal.php?c=controlador&a=muestraUsuarios">Regresar</a>
                
            </form>

        </div>
    </main>
</div>


<?php 
    require_once "dashboard_footer.php";
 ?>
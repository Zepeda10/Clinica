
<script src="jquery/jquery-3.5.1.js"></script>

<?php 
	$id_compra = uniqid();
?>

<h2 class="fw-300 centrar-texto">Vender</h2>
<form action="#" method="POST" id="frmVender" name="frmVender" accept-charset="utf-8">

    <fieldset>
        <legend>Productos</legend>
        <input id="id_producto" type="hidden" name="id_producto" value="">
        <input id="id_compra" type="hidden" name="id_compra" value='<?php echo $id_compra; ?>'>

        <label for="cod_barras">Código de Barras</label>
        <input type="text" id="cod_barras" name="cod_barras" placeholder="Código de Barras" onkeyup="buscarProducto(event,this,this.value)" autofocus>

        <label for="codigo" id="resultado_error"></label>
      
        <label for="nombre_producto">Nombre del Producto</label>
        <input type="text" id="nombre_producto" name="nombre_producto" readonly="true">

        <label for="cantidad">Cantidad</label>
        <input type="text" id="cantidad" name="cantidad" >

        <label for="precio_unitario">Precio Unitario</label>
        <input type="text" id="precio_unitario" name="precio_unitario" readonly="true">

        <label for="subtotal">Subtotal</label>
        <input type="text" id="subtotal" name="subtotal" readonly="true">

        <button type="button" id="agregarProducto" name="agregarProducto" onclick="agregaProducto(id_producto.value,cantidad.value, '<?php echo $id_compra; ?>')">Agregar</button>

    </fieldset>



    <table id="tablaProductosVenta">
    	<thead>
    		<tr>
    			<th>Id</th>
    			<th>Código de Barras</th>
    			<th>Nombre</th>
    			<th>Cantidad</th>
    			<th>Precio</th>
    			<th>Total</th>

    		</tr>
    	</thead>
    	<tbody>
    		
    	</tbody>
    </table>


    <h2>Total</h2>
    <input type="text" id="total" name="total" readonly="true" value="0.0">


    <script>
    	$(document).ready(function(){

    	});

    	function buscarProducto(e,tagCodigo,codigo){
    		var enterKey = 13;

    		if(codigo!=''){		
    			if(e.which==enterKey){

    				console.log("malandro");

    				$.ajax({
    					url:'principal.php?c=controlador&a=buscarPorCodigo&id='+codigo,
    					dataType: 'json',
    						success: function(resultado){
    							if(resultado==0){
    								$(tagCodigo).val('');
    							}else{
    								$(tagCodigo).removeClass('has-error');
    								$("#resultado_error").html(resultado.error);

    								if(resultado.existe){
    									$("#id_producto").val(resultado.datos.id_producto);
    								 	$("#nombre_producto").val(resultado.datos.nombre_producto);							
    									$("#precio_unitario").val(resultado.datos.precio_unitario);
    									$("#cantidad").val(1);
    									$("#subtotal").val(resultado.datos.precio_unitario);
    									$("#cantidad").focus();
    									console.log("asdv");

    								}else{
    									$("#id_producto").val('');
    									$("#nombre_producto").val('');							
    									$("#precio_unitario").val('');
    									$("#cantidad").val('');
    									$("#subtotal").val('');
    									console.log("noo");
    								}
    							}
    						}

    				});
 
    			}

    		}

    	}


    	function agregaProducto(id_producto,cantidad,id_compra){

    		if(id_producto!=null && id_producto!=0 && cantidad > 0){		

    				console.log("malandro 2");

    				$.ajax({
    					url:'principal.php?c=controlador&a=insertaProdTemp&id='+id_producto+'&cantidad='+cantidad+'&idCompra='+id_compra,
    						success: function(resultado){
    							if(resultado==0){
    								console.log("cero");
    							}else{
    								var resultado = JSON.parse(resultado);

                                    if(resultado.error==''){
                                        $("#tablaProductosVenta tbody").empty();
                                        $("#tablaProductosVenta tbody").append(resultado.datos);
                                        $("#total").val(resultado.total);

                                        $("#id_producto").val('');
                                        $("#cod_barras").val('');
                                        $("#nombre_producto").val('');                          
                                        $("#precio_unitario").val('');
                                        $("#cantidad").val('');
                                        $("#subtotal").val('');
                                    }
    							}
    						}

    				});

    		}

    	}


        function eliminarProducto(id_producto,id_compra){
                    $.ajax({
                        url:'principal.php?c=controlador&a=eliminarProdVenta&id='+id_producto+'&idCompra='+id_compra,
                            success: function(resultado){
                                if(resultado==0){
                                    $(tagCodigo).val('');
                                }else{
                                    var resultado = JSON.parse(resultado);
                                    $("#tablaProductosVenta tbody").empty();
                                    $("#tablaProductosVenta tbody").append(resultado.datos);
                                    $("#total").val(resultado.total);
                                }
                            }

                    });
 
        }

    </script>
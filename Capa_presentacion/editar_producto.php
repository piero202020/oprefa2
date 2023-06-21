<?php

//fetch.php
 
$idproducto = !empty($_POST['idproducto']) ? $_POST['idproducto'] : '';
$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_producto&idproducto=$idproducto";

$client = curl_init($api_url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response);

$output = '';

if($result > 0)
	 
{
	foreach($result as $row)
	{
		$output .= '
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <body background="../archivos/fondo2.jpg" with="100%" height="100%" align="center"  >
  <div class="container" align="center"  >
   <h1>EDITANDO PRODUCTO </h1>
  <div  class="form-group">
                <div class="card">
		 <form  method="post"  action="http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=editar_producto" >
       <input value='.$row->idproducto.' id="idproducto" name="idproducto" type="hidden"  >
			 
			<div class="col-md-6">
			        	<label>NOMBRE</label>
				 <input value='.$row->nombre.' id="nombre"  required="" name="nombre" type="text" class="form-control input-lg">
				 </div>
				   
			        <div class="col-md-6">
			        	<label>PRECIO</label>
				 <input value='.$row->precio.' id="precio"  required="" name="precio" type="number" min="1" class="form-control input-lg">
				  </div>
				<div class="col-md-6">
			        	<label>Tipo del Producto
			        	 
			        	<input type="radio" class="form-control"  name="Gender" id="Gender" value="Alimento"  />Alimento
			        	<input type="radio"  class="form-control" name="Gender" id="Gender" value="Ropa"  />Ropa
			        	<input type="radio"  class="form-control" name="Gender" id="Gender" value="Accesorios"  />Accesorios
			      <br>
			        	<label>IMAGEN</label>
				 <input  id="imagen" type="file" id="imagen" value='.$row->imagen.' name="imagen"  class="form-control input-lg" />
			        </div>
				  
				  <div class="col-md-6">
			        	<label>CANTIDAD</label>
				 <input value='.$row->cantidad.' id="cantidad"  required="" name="cantidad" type="number" min="1" class="form-control input-lg">
				 </div>
				 
				  
				  <div class="col-md-6">
			        	<label>Proveedor del Producto</label>
			        	 <select class="form-control input-lg" id="proveedor" name="tipo">
	<option > </option>
    <option value="Mister_Pet">Mister_Pet</option>
    <option value="LOPCAN">LOPCAN</option>
    <option value="UNICACHI">UNICACHI</option>
    <option value="Otro">Otro</option>
     
  </select>  </div>
   <div class="col-md-6">
			        	<label>Descripcion</label>
			    <textarea class="form-control input-lg"   required="" rows="3" value='.$row->descripcion.' id="descripcion" name="descripcion">'.$row->descripcion.'</textarea>  </div>
			    
 <div class="col-md-6">
 <br>
<input type="submit" value="EDITAR PRODUCTO" class="btn btn-success btn-block">
<a href="../Capa_presentacion/producto.php" class="btn btn-primary btn-block">VOLVER</a>
 
</div>
		 </form>
		   </div>
				  </div>
				  

  </body>
		 
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">no se a encontrado datos</td>
	</tr>
	';
}

echo $output;

?>
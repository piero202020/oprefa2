 

<?php
 
 
$id = !empty($_POST['id']) ? $_POST['id'] : '';
$api_url = "http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_cliente&id=$id";

$client = curl_init($api_url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response);

$output = '';

if($result > 0)
	//count($result) > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <body  background="../archivos/fondoclaro.jpg">
  <div class="container" align="center"  >
  <h1>Revisando Solicitudes</h1>
  <div  class="form-group">
                <div class="card">
		 <form  method="post"  action="http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=editar_cliente" align="center">
       <input value='.$row->id.' id="id" name="id" type="hidden"  >
			 
			<div class="col-md-6">
			<br>
			        	<label>Persona Natural o Juridica</label>
				 <input value='.$row->nombre.' id="nombre" class="form-control input-lg" required="" name="nombre" type="text"  >
				 </div>
				 <div class="col-md-6">
				 <br>
			        	<label>DNI del Pensionista</label>
				 <input value='.$row->dni.' id="dni" class="form-control input-lg" required="" name="dni" type="text" class="form-control">
				 </div>
				 <div  class="col-md-6">
				 <br>
			        	<label>Asunto de la Solicitud</label>
				 <input value='.$row->apellido.' id="apellido" class="form-control input-lg" required="" name="apellido" type="text"  >
				 </div>
				    <div class="col-md-6">
				    <br>
			        	<label>Telefono de Contacto</label>
				 <input value='.$row->celular.' id="celular" class="form-control input-lg"  required="" name="celular" type="text" >
				 </div>
				 <div class="col-md-6">
				 <br>
			        	<label>Correo de Contacto</label>
				 <input value='.$row->domicilio.' id="domicilio" class="form-control input-lg" required="" name="domicilio" type="text">
				 </div>
				 <div class="col-md-6">
				 <br>
			        	<label>estado</label>
				 <input value='.$row->estado.' id="estado" class="form-control input-lg" required="" name="estado" type="text">
				 </div><div class="col-md-6">
				 <br>
			        	<label>respuesta</label>
				 <input value='.$row->respuesta.' id="respuesta" class="form-control input-lg" required="" name="respuesta" type="text">
				 </div>
				 <div class="col-md-6">
				 <br>
			        	<label>Archivo</label>
				 <input   id="imagen"  name="imagen" type="file" class="form-control input-lg">
				 </div>
 <div class="col-md-6">
 <br>
<input type="submit" value="Actualizar Estado de Solicitud" class="btn btn-success btn-block">
   </div>
<div class="col-md-6">
  <br>
<a href="../Capa_presentacion/gestion_solicitud.php" class="btn btn-primary btn-block">VOLVER</a>  </div>
 

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
 
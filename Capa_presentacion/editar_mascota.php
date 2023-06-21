 

<?php
 
 
$idmascota = !empty($_POST['idmascota']) ? $_POST['idmascota'] : '';
$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_mascota&idmascota=$idmascota";

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
  <body background="../archivos/fondo2.jpg" with="100%" height="100%" align="center"  >
  <div class="container" align="center"  >
  <h1>EDITANDO MASCOTAS</h1>
  <div  class="form-group">
                <div class="card">
		 <form  method="post"  action="http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=editar_mascotas" align="center">
       <input value='.$row->idmascota.' id="idmascota" name="idmascota" type="hidden"  >
			 
			<div class="col-md-6">
			        	<label>NOMBRE</label>
				 <input value='.$row->nombre.' id="nombre"  required="" name="nombre" type="text" class="form-control">
				 </div>
				 <div class="col-md-6">
			        	<label>DNI</label>
				 <input value='.$row->dni.' id="dni"  required="" name="dni" type="text" class="form-control">
				 </div>
				 <div  class="col-md-6">
			        	<label>ESPECIE</label>
				 <input value='.$row->especie.' id="especie"  required="" name="especie" type="text" class="form-control">
				 </div>
				    <div class="col-md-6">
			        	<label>RAZA</label>
				 <input value='.$row->raza.' id="raza"  required="" name="raza" type="text" class="form-control">
				 </div>
				 <div class="col-md-6">
			        	<label>SEXO</label>
				 <input value='.$row->sexo.' id="sexo"  required="" name="sexo" type="text" class="form-control">
				 </div>
				 <div class="col-md-6">
			        	<label>FOTO</label>
				 <input   id="imagen"  name="imagen" type="file" class="form-control">
				 </div>
 <div class="col-md-6">
<input type="submit" value="EDITAR MASCOTA" class="btn btn-success btn-block">
<a href="../Capa_presentacion/mascota.php" class="btn btn-primary btn-block">VOLVER</a>  </div>
 

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
 
 

<?php
 
 
$idusu = !empty($_POST['idusu']) ? $_POST['idusu'] : '';
$api_url = "http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_usuario&idusu=$idusu";

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
  <body  >
  <div class="container" align="center"  >
  <h1>EDITANDO USUARIO</h1>
  <div  class="form-group">
                <div class="card">
		 <form  method="post"  action="http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=editar_admin" align="center">
       <input value='.$row->idusu.' id="idusu" name="idusu" type="hidden"  >
			 
			<div class="col-md-6">
			<br>
			        	<label>NOMBRE</label>
				 <input value='.$row->nombre.' id="nombre" class="form-control input-lg" required="" name="nombre" type="text"  >
				 </div>
				 <div class="col-md-6">
				 <br>
			        	<label>DNI</label>
				 <input value='.$row->dni.' id="dni" class="form-control input-lg" required="" name="dni" type="text" class="form-control">
				 </div>
				 <div  class="col-md-6">
				 <br>
			        	<label>APELLIDO</label>
				 <input value='.$row->apellido.' id="apellido" class="form-control input-lg" required="" name="apellido" type="text"  >
				 </div>
				  <div  class="col-md-6">
				 <br>
			        	<label>USUARIO</label>
				 <input value='.$row->usuario.' id="usuario" class="form-control input-lg" required="" name="usuario" type="text"  >
				 </div>
				  <div  class="col-md-6">
				 <br>
			        	<label>PASSWORD</label>
				 <input value='.$row->pass.' id="pass" class="form-control input-lg" required="" name="pass" type="text"  >
				 </div>
				    <div class="col-md-6">
				    <br>
			        	<label>TIPO DE USUARIO</label>
				 <input value='.$row->tipo.' id="tipo"  class="form-control input-lg" readonly="readonly" name="tipo" type="text" >
				 </div>
				  <div  class="col-md-6">
				 <br>
			        	<label>TELEFONO</label>
				 <input value='.$row->telefono.' id="telefono" class="form-control input-lg" required="" name="telefono" type="text"  >
				 </div>
				 <div class="col-md-6">
				 <br>
			        	<label>DIRECCION</label>
				 <input value='.$row->direccion.' id="direccion" class="form-control input-lg" required="" name="direccion" type="text">
				 </div>
				 <div class="col-md-6">
				 <br>
			        	<label>FOTO DEL USUARIO</label>
				 <input   id="imagen"  name="imagen" type="file" class="form-control input-lg">
				 </div>
 <div class="col-md-6">
 <br>
<input type="submit" value="EDITAR USUARIO" class="btn btn-success btn-block">
   </div>
<div class="col-md-6">
  <br>
<a href="../Capa_presentacion/usuario.php" class="btn btn-primary btn-block">VOLVER</a>  </div>
 

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
		<td colspan="2" align="center">error</td>
	</tr>
	';
}

echo $output;

  

?>
 
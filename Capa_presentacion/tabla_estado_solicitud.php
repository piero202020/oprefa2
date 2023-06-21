<?php

//fetch.php

$api_url = "http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=listar_cliente";

$client = curl_init($api_url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response);

$output = '';

if(count($result) > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr  class="active">
		  	<td>'.$row->nombre.'</td>
			 <td>'.$row->apellido.'</td>
		 	<td>'.$row->dni.'</td>
			<td>'.$row->domicilio.'</td>
			<td>'.$row->respuesta.'</td>
			<td>'.$row->estado.'</td>
			<td><a  class="btn btn-success" href="../archivos/'.$row->imagen.'" target="_blank"><span class="glyphicon glyphicon-eye-open"></span></a></td>
			
			 <td align="center"><form  method="POST"  action="editar_cliente.php" >
			 <input type="hidden" value='.$row->id.' id="id" name="id">
			 <button class="btn btn-primary"> <span class="glyphicon glyphicon-edit"></span></button>
			 </form> <form  method="post"  action="http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=eliminar_cliente" >
			 <input type="hidden" value='.$row->id.' id="id" name="id">
			 <button class="btn btn-danger" id="eliminado"  name="eliminado"> <span class="glyphicon glyphicon-trash"></span></button>
			 </form></td>
		 </tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">No Data Found</td>
	</tr>
	';
}

echo $output;

?>

<!--<td align="center"><form  method="POST"  action="registro_mascota.php" >
			 <input type="hidden" value='.$row->dni.' id="dni" name="dni">
			 <button class="btn btn-warning btn-block"> <span class="glyphicon glyphicon-list-alt"></span></span></button>
			 </form></td>-->
<?php

 

$api_url = "http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=listar_consulta";

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
		 
			<td>'.$row->idconsultas.'</td>
			<td>'.$row->fecha.'</td>
			<td>'.$row->sintomas.'</td>
			<td>'.$row->diagnostico.'</td>
			<td>'.$row->estado.'</td>
			<td>'.$row->idmascota.'</td>
			 
			 <td align="center"><form  method="POST"  action="editar_cliente.php" >
			 <input type="hidden" value='.$row->idconsultas.' id="id" name="id">
			 <button class="btn btn-primary"> <span class="glyphicon glyphicon-edit"></span></button>
			 </form><form  method="post"  action="http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=eliminar_cliente" >
			 <input type="hidden" value='.$row->idconsultas.' id="id" name="id">
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
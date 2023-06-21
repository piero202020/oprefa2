<?php

$api_url = "http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=listar_producto";

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
		 
		<tr class="active">
		 
			<td align="center"  >'.$row->nombre.'</td>
			<td align="center" >'.$row->proveedor.'</td>
			<td align="center" >'.$row->tipo.'</td>
			
			 <td align="center" >'.$row->descripcion.'</td>
			 <td align="center" >'.$row->precio.'</td>
			 <td align="center" >'.$row->cantidad.'</td>
			 <td align="center" > <a  class="btn btn-success" href="../archivos/'.$row->imagen.'" target="_blank"><span class="glyphicon glyphicon-eye-open"></span></a></td>
			 <td align="center" ><form  method="POST"  action="editar_producto.php" >
			 <input type="hidden" value='.$row->idproducto.' id="idproducto" name="idproducto">
			 <button class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
			 </form> <form  method="post"  action="http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=eliminar_producto" >
			 <input type="hidden" value='.$row->idproducto.' id="idproducto" name="idproducto">
			 <button class="btn btn-danger" id="eliminado"  name="eliminado"><span class="glyphicon glyphicon-trash"></span></button>
			 </form></td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="6" align="center">No Data Found</td>
	</tr>
	';
}

echo $output;

?>
<script type="text/javascript">
	$('#eliminado').click(function(){
		alert("Eliminado Correctamente");
	});
</script>
 

<?php
 
 
$idmascota = !empty($_POST['idmascota']) ? $_POST['idmascota'] : '';

 $api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_mascota3&idmascota=$idmascota";

$client = curl_init($api_url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response);

$output = '';

if($result > 0)
	//count($result) > 0)
{
	foreach($result as $row1)
	{
		$output .= '
		 <head>
  <title>DERMATOVET</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
  <body background="../archivos/fondo2.jpg" with="100%" height="100%" align="center"  >
  <div class="container" align="center"  >
  <h1><font face="univers" size="6"  ><center>REGISTRO DE CONSULTAS DE LA MASCOTA</center></font></h1>
    <div class="col-lg-12 parte01" align="center">
                <div class="card" align="center">
               
		 <form  method="post"  action="http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=registrar_consulta" align="center">
      
			 <div class="col-md-6">
			 <label><font face="univers" size="5">CODIGO DE MASCOTA</label>
<input value='.$row1->idmascota.' id="idmascota"  readonly="" class="form-control input-lg"  name="idmascota" type="text" >
<label><font face="univers" size="5">NOMBRE DE MASCOTA</label>
<input value='.$row1->nombre.' id="xdd"  readonly="" class="form-control input-lg"  name="xdd" type="text" >
			  </div> 
			<div class="col-md-6" >
			        	<label><font face="univers" size="5" >FECHA</label>
				 <input   id="fecha"  required="" class="form-control input-lg" name="fecha" type="datetime-local" class="form-control">
				 
 
				 </div>  
				  <div class="col-md-6">
			        	<label><font face="univers" size="5"  >SINTOMAS</label>
				 <input   id="sintomas"  required="" class="form-control input-lg" name="sintomas" type="text" class="form-control">
				 </div>
				 
				    <div class="col-md-6">
			        	<label><font face="univers" size="5">DIAGNOSTICO</label>
				<textarea class="form-control input-lg"  required="" rows="3" id="diagnostico" name="diagnostico"></textarea>
				 </div>
				  
				 
<div class="col-md-6">
 

<br>
<input type="submit" value="REGISTRAR CONSULTAS" class="btn btn-info btn-block">

  <br>
</div>
 

		 </form>
				  </div>
				  </div>
  			  
  <br>
   
  <table class="table table-bordered" cellspacing="0" width="100%"  cellspacing="0">
<thead>
 
<tr class="info"> <td ><center>  <font face="univers" size="5"  >CONSULTAS </center></td>
<td colspan="3"><a href="../Capa_presentacion/mascota.php"   class="btn btn-primary btn-block">VOLVER <span class="glyphicon glyphicon-arrow-left"></span></a></td>
<td  ><input id="myInput" type="text" class="form-control"   placeholder="Filtrar..."></td>
</tr>
 
 
						<tr  class="info"  align="center">
							 
							<th width="180"  align="center"	><font face="univers" size="5"  >CODIGO_CONSULTA</th>
							<th width="180" align="center" ><font face="univers" size="5"  >FECHA_HORA</th>
							<th width="180" align="center" ><font face="univers" size="5"  >SINTOMAS</th>
							<th width="180" align="center" ><font face="univers" size="5" >DIAGNOSTICO</th>
							<th width="180" align="center" ><font face="univers" size="5"  >IDMASCOTA</th>
						 
						</tr>
					</thead>
  </table>
   <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
		 
		';

	}
	 
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">ERRORO AQUI</td>
	</tr>
	';
}

echo $output;

$api_url1 = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=listar_consulta";
 
$client1 = curl_init($api_url1);

curl_setopt($client1, CURLOPT_RETURNTRANSFER, true);

$response1 = curl_exec($client1);

$result1 = json_decode($response1);

$output = '';

if(count($result1) > 0)
{
  
	foreach($result1 as $row)
	{
		$output .= '

 <div class="col-lg-12 parte01">
                <div class="card">
		 <table class="active" cellspacing="0" width="100%" BORDER="2" >
		 <tbody id="myTable">
		<tr   class="active" align="center" >
		  
			<td width="200" align="center"  BGCOLOR="#B8C4C4" ><center><font face="univers" size="5"  >'.$row->idconsulta.'</center></td>
			<td width="220" align="center"  BGCOLOR="#B8C4C4" ><center><font face="univers" size="5"  >'.$row->fecha.'</center></td>
			<td width="220" align="center"  BGCOLOR="#B8C4C4" ><center><font face="univers" size="5" >'.$row->sintomas.'</center></td>
			<td width="220" align="center"  BGCOLOR="#B8C4C4" ><center><font face="univers" size="5"  >'.$row->diagnostico.'</center></td>
			<td width="220" align="center" BGCOLOR="#B8C4C4" ><center><font face="univers" size="5" >'.$row->idmascota.'</center></td>
			 
		 
			 </tr>
			 </tbody>

			 </table>
			 </div>
</div>

		 ';
			
		
}
 
 }
 else
{
	$output .= '
	<tr>
		<td colspan="7" align="center"><h1>NO TIENE MASCOTAS REGISTRADAS AUN!!</h1></td>
	</tr>
	';
}

echo $output;

?>

    
 
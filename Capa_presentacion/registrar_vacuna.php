 

<?php
 
 
$idmascota = !empty($_POST['idmascota']) ? $_POST['idmascota'] : '';

 $api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_mascota2&idmascota=$idmascota";

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
  <h1>REGISTRO DE VACUNAS DE LA MASCOTA</h1>
    <div class="col-lg-12 parte01" align="center">
                <div class="card" align="center">
               
		 <form  method="post"  action="http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=registrar_vacuna" align="center">
      <div class="col-md-6">
			 <label><font face="univers" size="5">CODIGO DE MASCOTA</label>
<input value='.$row1->idmascota.' id="idmascota"  readonly="" class="form-control input-lg"  name="idmascota" type="text" >
<label><font face="univers" size="5">NOMBRE DE MASCOTA</label>
<input value='.$row1->nombre.' id="jjh"  readonly="" class="form-control input-lg"  name="llk" type="text" >
			  </div> 
			 
			<div class="col-md-6" >
			        	<label>FECHA PROGRAMADA</label>
				 <input   id="fechaprogramada"  required="" class="form-control input-lg" name="fechaprogramada" type="date" class="form-control">
				 </div>  
				  <div class="col-md-6">
			        	<label>VACUNA APLICADA</label>
				 <input   id="vacunacion"  required="" class="form-control input-lg" name="vacunacion" type="text" class="form-control">
				 </div>
				 
				    <div class="col-md-6">
			        	<label>HORA</label>
				 <input  id="hora"  required="" class="form-control input-lg" name="hora" type="time" class="form-control">
				 </div>
				  
				 
<div class="col-md-6">
<br>
<input type="submit" value="REGISTRAR VACUNA" class="btn btn-info btn-block">
  <br>
</div>
 

		 </form>
				  </div>
				  </div>
<style type="text/css">
	.container{
    text-align:left
}
 
.right{
    float: left;
      text-align:left
 
}
</style>
 
  
				
				 	<div   class="col-md-2" align="right" id="left">
				  		 
     
  </div>
  <br>
   
  <table class="table table-bordered" cellspacing="0" width="100%"  cellspacing="0">
<thead>
<tr class="info"> <td ><center> <h4>VACUNAS APLICADAS</h4></center></td>
<td colspan="3"><a href="../Capa_presentacion/mascota.php"   class="btn btn-primary btn-block">VOLVER <span class="glyphicon glyphicon-arrow-left"></span></a></td>
<td  ><input id="myInput" type="text" class="form-control"   placeholder="Filtrar..."></td>
</tr>
 
						<tr class="info" align="center">
							 
							<th width="180"  align="center" > CODIGO_VACUNA</th>
							<th width="180" align="center" >FECHA_PROGRAMACION</th>
							<th width="180" align="center" >VACUNA_APLICADA</th>
							<th width="180" align="center" >HORA_DE_APLICACION</th>
							<th width="180" align="center" >IDMASCOTA</th>
						 
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

$api_url1 = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=listar_vacuna";
 
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <div class="col-lg-12 parte01">
                <div class="card">
		 <table class="active" cellspacing="0" width="100%" BORDER="2" >
		 <tbody id="myTable">
		<tr   class="active" align="center" >
		  
			<td width="200" align="center"  BGCOLOR="#B8C4C4"  ><center><font face="univers" size="5"  >'.$row->idvacuna.'</center></td>
			<td width="220" align="center"  BGCOLOR="#B8C4C4" > <center><font face="univers" size="5"  >'.$row->fechaprogramada.'</center></td>
			<td width="220" align="center"  BGCOLOR="#B8C4C4" ><center><font face="univers" size="5"  >'.$row->vacunacion.'</center></td>
			<td width="220" align="center"  BGCOLOR="#B8C4C4" ><center><font face="univers" size="5"  >'.$row->hora.'</center></td>
			<td width="220" align="center"  BGCOLOR="#B8C4C4" ><center><font face="univers" size="5"  >'.$row->idmascota.'</center></td>
			 
		 
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

    
 
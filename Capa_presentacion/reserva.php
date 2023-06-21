<!DOCTYPE html>
<html>
	<head>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body background="../archivos/fondo2.jpg">
		<div class="container">
			<br />
			
			<h3 align="center">RESERVAS DESDE LA PAGINA WEB</h3>
			<style type="text/css">
	.container{
    text-align:center
}
 
.right{
    float: right;
      text-align:center
 
}
</style> 
			 <div class="card">
				<div class="right" align="right" id="right">
				  		<label>BUSCAR  <span class="glyphicon glyphicon-search"></span></label>
     <input id="myInput" type="text" class="form-control"  placeholder="filtrar...">
  </div>
  <a href="../Capa_presentacion/menu.php"   class="btn btn-primary">VOLVER <span class="glyphicon glyphicon-arrow-left"></span></a>   
				<table class="table table-bordered">
					<thead>
						<tr class="info">
							<th>Dia de la Cita</th>
							<th>Hora de la Cita</th>
							<th>Nombre</th>
							<th>Telefono</th>
							<th>Dni</th>
							<th>Correo</th>
							<th>Direccion</th>
							<th>Estado</th>
							<th>Confirmar-Reservacion</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</body>
</html>
 

<script type="text/javascript">
$(document).ready(function(){

	fetch_data();

	function fetch_data()
	{
		$.ajax({
			url:"tabla_reserva.php",
			success:function(data)
			{
				$('tbody').html(data);
			}
		})
	}
	});
 </script>


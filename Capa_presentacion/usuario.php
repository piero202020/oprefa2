<!DOCTYPE html>
<html>
	<head>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body  background="../archivos/fondoclaro.jpg">
		<div class="container">
			<br />
			
			 
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
			 
   <div class="col-lg-3 parte01">
                <div class="card">
                	 <form  method="post"  action="http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=insertar_usuario" >
 
			<div class="form-group">
			        	<label><font face="univers" size="5"  >Nombre:</label>
			        	<input type="text" name="nombre" id="nombre" class="form-control input-lg"  required=""  />
			        </div> 
			        <div class="form-group">
			        	<label><font face="univers" size="5"  >Apellido:</label>
			        	<input type="text" name="apellido" id="apellido" class="form-control input-lg"  required=""  />
			        </div>
			        <div class="form-group">
			        	<label><font face="univers" size="5"  >Usuario:</label>
			        	<input type="text" name="usuario" id="usuario" class="form-control input-lg"  required=""  />
			        </div>
			        <div class="form-group">
			        	<label><font face="univers" size="5"  >Clave:</label>
			        	<input type="text" name="pass" id="pass" class="form-control input-lg"  required=""  />
			        </div> 
			        	 
			        
			        <div class="form-group">
			        	<label><font face="univers" size="5"  >Tipo de usuario</label>
			        	<!--<input type="text" name="tipo" id="tipo" class="form-control input-lg"  required=""  />-->
			        	<select name="tipo" id="tipo" class="form-control">
  <option value="pensionista">Pensionista</option>
  <option value="recepcion" >Operario</option>
  
</select>
			         </div>
			          <div class="form-group">
			        	<label><font face="univers" size="5"  >DNI</label>
			        	<input type="text" name="dni" id="dni" class="form-control input-lg"  required=""  />
			         </div>
			         <div class="form-group">
			        	<label><font face="univers" size="5"  >Telefono</label>
			        	<input type="text" name="telefono" id="telefono" class="form-control input-lg"  required=""  />
			         </div>
			         <div class="form-group">
			        	<label><font face="univers" size="5"  >Direccion</label>
			        	<input type="text" name="direccion" id="direccion" class="form-control input-lg"  required=""  />
			         </div>

			         <div class="form-group">
			        	<label><font face="univers" size="5"  >Adjuntar archivo o Documento:</label>
			        	<input type="file" name="imagen" id="imagen" class="form-control input-lg"  required=""  />
			        	
			        </div>
			        <div class="form-group">
			        	<style>
                                  #preview {
  border:1px solid #ddd;
  padding:5px;
  border-radius:2px;
  background:#fff;
  max-width:200px;
}

#preview img {width:100%;display:block;}
                              </style> 
                            <div id="preview"></div>
			        </div>
			         <div class="form-group"><center><button id="grabar" name="grabar" class="btn btn-info btn-block">REGISTRAR <span class="glyphicon glyphicon-floppy-saved"></span></button></center></div>
			          </div> 
			          
			          </div>   </div> 
  
				 <div class="col-lg-9 parte01">
                <div class="card">
				  	<div class="right" align="right" id="right">
				  		<label>BUSCAR  <span class="glyphicon glyphicon-search"></span></label>
     <input id="myInput" type="text" class="form-control input-lg"  placeholder="filtrar...">
  </div>
  <a href="../Capa_presentacion/menu2.php"   class="btn btn-primary">VOLVER <span class="glyphicon glyphicon-arrow-left"></span></a>   
 
				<table   class="table table-bordered">
					<thead>
						<tr class="info">
							 <th>Nombre</th>
							<th>Apellido</th>
						 <th>Usuario</th>
							<th>Clave</th>
							
						 <th>Tipo-Usuario:</th>
						  <th>DNI</th>
							<th>IMG</th>
							
						<!--	<th>REGISTRAR<br>MASCOTA</th>--->
							<th>OPCION</th>
						</tr>
					</thead>
					<tbody id="myTable"></tbody>
				</table>
			 	</div>	</div>
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
			url:"tabla_usuario.php",
			success:function(data)
			{
				$('tbody').html(data);
			}
		})
	}
	});


$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
 </script>


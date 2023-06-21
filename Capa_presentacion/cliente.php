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
			
			<h3 align="center">REGISTRAR SOLICITUD</h3>
			 
			<div class="col-lg-3 parte01">
                <div class="card">
                	 <form  method="post"  action="http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=insertar_cliente" >
 
			<div class="form-group">
			        	<label><font face="univers" size="5"  >Persona Natural o Juridica</label>
			        		<select name="nombre" id="nombre" class="form-control">
  <option value="natural">Natural</option>
  <option value="juridica" >Juridica</option>
</select>
			      <!--  <input type="text" name="nombre" id="nombre" class="form-control input-lg"  required=""  /> -->
			        
			        </div> 
			        <div class="form-group">
			        	<label><font face="univers" size="5"  >Asunto de la Solicitud</label>
			        	<input type="text" name="apellido" id="apellido" class="form-control input-lg"  required=""  />
			        </div>
			        <div class="form-group">
			        	<label><font face="univers" size="5"  >Codigo de pensionista</label>
			        	<input type="text" name="dni" id="dni" class="form-control input-lg"  required=""  />
			        </div>
			         
			        	<input type="hidden" name="celular" id="celular" class="form-control input-lg"  required=""  />
			        
			        <div class="form-group">
			        	<label><font face="univers" size="5"  >Descripcion de la solicitud</label>
			        <!--	<input type="text" name="domicilio" id="domicilio" class="form-control input-lg"  required=""  /> -->
			        <textarea id="domicilio" name="domicilio" rows="4" cols="20">
 
</textarea>
			        	<input type="hidden" name="estado" value="activo" id="estado">
			        	<input type="hidden" name="respuesta" value="pendiente" id="respuesta">
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
			          </div>   </div> 














<style type="text/css">
	.container{
    text-align:center
}
 
.right{
    float: right;
      text-align:center
 
}
</style>
			 
				   <div class="col-lg-9 parte01">
                <div class="card">
				  	<div class="right" align="right" id="right">
				  		<label>BUSCAR  <span class="glyphicon glyphicon-search"></span></label>
     <input id="myInput" type="text" class="form-control input-lg"  placeholder="filtrar...">
  </div>
  <a href="../Capa_presentacion/menu.php"   class="btn btn-primary">VOLVER <span class="glyphicon glyphicon-arrow-left"></span></a>   
 
				<table   class="table table-bordered">
					<thead>
						<tr class="info">
							 
							<th>Persona</th>
							<th>Asunto</th>
						 <th>Codigo de pensionista</th>
							<th>Descripcion</th>
							
						 <th>Respuesta</th>
							<th>Archivo</th>

						<!--	<th>REGISTRAR<br>MASCOTA</th>--->
							<th>OPCION</th>
						</tr>
					</thead>
					<tbody id="myTable"></tbody>
				</table>
			 	</div>	</div>
		</div>


	</body>
</html> 



<script type="text/javascript">
 


$(document).ready(function(){

	fetch_data();

	function fetch_data()
	{
		$.ajax({
			url:"tabla_cliente.php",
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
 <script>
   document.getElementById("imagen").onchange = function(e) {
	let reader = new FileReader();
  
  reader.onload = function(){
    let preview = document.getElementById('preview'),
    		image = document.createElement('img');
    		//image = document.createElement('img');

    image.src = reader.result;
    
    preview.innerHTML = '';
    preview.append(image);
  };
 
  reader.readAsDataURL(e.target.files[0]);
}
</script>
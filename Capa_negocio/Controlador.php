<?php



if(isset($_POST["action"]))
{
	 
	if($_POST["action"] == 'insertar_cliente')
	{
		$form_data = array(
			'nombre'	=>	$_POST['nombre'],
			'apellido'	=>	$_POST['apellido'],
			'dni'	=>	$_POST['dni'],
			'celular'	=>	$_POST['celular'],
			'domicilio'	=>	$_POST['domicilio'],
			'imagen'	=>	$_POST['imagen'],
			'estado'	=>	$_POST['estado'],
			'respuesta'	=>	$_POST['respuesta']
			 
		);
		$api_url = "http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=insertar_cliente";   
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);
		$result = json_decode($response, true);
		foreach($result as $keys => $values)
		{
			if($result[$keys]['success'] == '1')
			{
				echo 'insert';
			}
			else
			{
				echo 'error';
			}
		}
	}
if($_POST["action"] == 'insertar_usuario')
	{
		$form_data = array(
			'nombre'	=>	$_POST['nombre'],
			'apellido'	=>	$_POST['apellido'],
			'usuario'	=>	$_POST['usuario'],
			'pass'	=>	$_POST['pass'],
			'tipo'	=>	$_POST['tipo'],
			'dni'	=>	$_POST['dni'],
			'telefono'	=>	$_POST['telefono'],
			'direccion'	=>	$_POST['direccion'],
			'imagen'	=>	$_POST['imagen']
			 
		);
		$api_url = "http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=insertar_usuario";   
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);
		$result = json_decode($response, true);
		foreach($result as $keys => $values)
		{
			if($result[$keys]['success'] == '1')
			{
				echo 'insert';
			}
			else
			{
				echo 'error';
			}
		}
	}

if($_POST["action"] == 'registrar_mascota')
	{
		$form_data = array(
			 
			'nombre'	=>	$_POST['nombre'],
			'especie'	=>	$_POST['especie'],
			'raza'	=>	$_POST['raza'],
			'sexo'	=>	$_POST['sexo'],
			'dni'	=>	$_POST['dni'],
			'imagen'	=>	$_POST['imagen']
			 );
		$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=registrar_mascota";   
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);
		$result = json_decode($response, true);
		foreach($result as $keys => $values)
		{
			if($result[$keys]['success'] == '1')
			{
				echo 'insert';
			}
			else
			{
				echo 'error';
			}
		}
	}

	if($_POST["action"] == 'registrar_reserva')
	{
		$form_data = array(
			'fecha'	=>	$_POST['fecha'],
			'hora'	=>	$_POST['hora'],
			'nombre'	=>	$_POST['nombre'],
			'telefono'	=>	$_POST['telefono'],
			'dni'	=>	$_POST['dni'],
			'correo'	=>	$_POST['correo'],
			'direccion'	=>	$_POST['direccion'],
			'estado'	=>	$_POST['estado']
			 );
		$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=registrar_reserva";   
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);
		$result = json_decode($response, true);
		foreach($result as $keys => $values)
		{
			if($result[$keys]['success'] == '1')
			{
				echo 'insert';
			}
			else
			{
				echo 'error';
			}
		}
	}

	if($_POST["action"] == 'registrar_consulta')
	{
		$form_data = array(
			'fecha'	=>	$_POST['fecha'],
			'sintomas'	=>	$_POST['sintomas'],
			'diagnostico'	=>	$_POST['diagnostico'],
			'idmascota'	=>	$_POST['idmascota']
			 
			 );
		$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=registrar_consulta";   
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);
		$result = json_decode($response, true);
		foreach($result as $keys => $values)
		{
			if($result[$keys]['success'] == '1')
			{
				echo 'insert';
			}
			else
			{
				echo 'error';
			}
		}
	}

	if($_POST["action"] == 'registrar_vacuna')
	{
		$form_data = array(
			'fechaprogramada'	=>	$_POST['fechaprogramada'],
			'vacunacion'	=>	$_POST['vacunacion'],
			'hora'	=>	$_POST['hora'],
			'idmascota'	=>	$_POST['idmascota']
			 
			 );
		$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=registrar_vacuna";   
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);
		$result = json_decode($response, true);
		foreach($result as $keys => $values)
		{
			if($result[$keys]['success'] == '1')
			{
				echo 'insert';
			}
			else
			{
				echo 'error';
			}
		}
	}

	if($_POST["action"] == 'actualizar_estado')
	{
		$form_data = array(
			'idreserva'	=>	$_POST['idreserva'],
			'diacita'	=>	$_POST['diacita'],
			'horacita'	=>	$_POST['horacita'],
			'nombre'	=>	$_POST['nombre'],
			'telefono'	=>	$_POST['telefono'],
			'dni'	=>	$_POST['dni'], 
			'correo'	=>	$_POST['correo'],
			'direccion'	=>	$_POST['direccion'],
			'estado'	=>	$_POST['estado']
			 
		);
		$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=actualizar_estado";   
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);
		$result = json_decode($response, true);
		foreach($result as $keys => $values)
		{
			if($result[$keys]['success'] == '1')
			{
				echo 'insert';
			 
			}
			else
			{
				echo 'error';
			}
		}
	}
	if($_POST["action"] == 'insertar_producto')
	{
		$form_data = array(
			'nombre'	=>	$_POST['nombre'],
			'Gender'	=>	$_POST['Gender'],
			'tipo'	=>	$_POST['tipo'],
			'descripcion'	=>	$_POST['descripcion'],
			'precio'	=>	$_POST['precio'],
			'cantidad'	=>	$_POST['cantidad'],
			'imagen'	=>	$_POST['imagen']
			 
		);
		$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=insertar_producto";   
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);
		$result = json_decode($response, true);
		foreach($result as $keys => $values)
		{
			if($result[$keys]['success'] == '1')
			{
				echo 'insert';
			}
			else
			{
				echo 'error';
			}
		}
	}
	if($_POST["action"] == 'login')
	{
		$usuario = $_POST["usuario"];
		$pass = $_POST["pass"];
		$api_url = "http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=login&usuario=".$usuario."&pass=".$pass.""; 
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
		 }

	if($_POST["action"] == 'fetch_single')
	{
		$id = $_POST["id"];
		$api_url = "http://localhost/service/api/test_api.php?action=fetch_single&id=".$id."";   
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}
	if($_POST["action"] == 'buscar_producto')
	{
		$idproducto = $_POST["idproducto"];
		$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_producto&idproducto=".$idproducto."";  
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}
	if($_POST["action"] == 'buscar_mascota')
	{
		$idmascota = $_POST["idmascota"];
		$api_url = "http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_mascota&idmascota=".$idmascota."";  
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}
	if($_POST["action"] == 'buscar_mascota2')
	{
		$idmascota = $_POST["idmascota"];
		$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_mascota2&idmascota=".$idmascota."";  
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}
	if($_POST["action"] == 'buscar_usuario')
	{
		$idusu = $_POST["idusu"];
		$api_url = "http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_usuario&idusu=".$idusu."";  
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}

	if($_POST["action"] == 'buscar_dni_mascota')
	{
		$dni = $_POST["dni"];
		$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_dni_mascota&dni=".$dni."";  
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}

	if($_POST["action"] == 'buscar_cliente')
	{
		$id = $_POST["id"];
		$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_cliente&id=".$id."";  
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}
	if($_POST["action"] == 'buscar_cliente2')
	{
		$dni = $_POST["dni"];
		$api_url = "http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_cliente2&dni=".$dni."";  
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}
	if($_POST["action"] == 'buscar_cliente3')
	{
		$dni = $_POST["dni"];
		$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=buscar_cliente3&dni=".$dni."";  
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}
	
	if($_POST["action"] == 'update')
	{
		$form_data = array(
			'first_name'	=>	$_POST['first_name'],
			'last_name'		=>	$_POST['last_name'],
			'id'			=>	$_POST['hidden_id']
		);
		$api_url = "http://localhost/service/api/test_api.php?action=update";  
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);
		$result = json_decode($response, true);
		foreach($result as $keys => $values)
		{
			if($result[$keys]['success'] == '1')
			{
				echo 'update';
			}
			else
			{
				echo 'error';
			}
		}
	}
	if($_POST["action"] == 'editar_cliente')
	{
		$form_data = array(
			'dni'	=>	$_POST['dni'],
			'nombre'	=>	$_POST['nombre'],
			'apellido'	=>	$_POST['apellido'],
			'celular'	=>	$_POST['celular'],
			'domicilio'	=>	$_POST['domicilio'],
			'imagen'	=>	$_POST['imagen'],
			'estado'	=>	$_POST['estado'],
			'respuesta'	=>	$_POST['respuesta'],
			'id'			=>	$_POST['id']
		);
		$api_url = "http://localhost/veterinaria_dermatovet/Capa_service/test_api.php?action=editar_cliente";   
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);
		$result = json_decode($response, true);
		foreach($result as $keys => $values)
		{
			if($result[$keys]['success'] == '1')
			{
				echo 'update';
			}
			else
			{
				echo 'error';
			}
		}
	}
	if($_POST["action"] == 'editar_producto')
	{
		$form_data = array(
			'nombre'	=>	$_POST['nombre'],
			'descripcion'	=>	$_POST['descripcion'],
			'precio'	=>	$_POST['precio'],
			'cantidad'	=>	$_POST['cantidad'],
			'imagen'	=>	$_POST['imagen'],
			'idproducto'			=>	$_POST['idproducto']
		);
		$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=editar_producto";   
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);
		$result = json_decode($response, true);
		foreach($result as $keys => $values)
		{
			if($result[$keys]['success'] == '1')
			{
				echo 'update';
			}
			else
			{
				echo 'error';
			}
		}
	}

	if($_POST["action"] == 'editar_admin')
	{
		$form_data = array(
			'nombre'	=>	$_POST['nombre'],
			
			'apellido'	=>	$_POST['apellido'],
			'usuario'	=>	$_POST['usuario'],
			'pass'	=>	$_POST['pass'],
			'tipo'	=>	$_POST['tipo'],
			'dni'	=>	$_POST['dni'],
			'telefono'	=>	$_POST['telefono'],
			'direccion'	=>	$_POST['direccion'],
			'imagen'	=>	$_POST['imagen'],
			'idmascota'			=>	$_POST['idmascota']
		);
		$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=editar_admin";   
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);
		$result = json_decode($response, true);
		foreach($result as $keys => $values)
		{
			if($result[$keys]['success'] == '1')
			{
				echo 'update';
			}
			else
			{
				echo 'error';
			}
		}
	}

	if($_POST["action"] == 'editar_mascotas')
	{
		$form_data = array(
			'nombre'	=>	$_POST['nombre'],
			'dni'	=>	$_POST['dni'],
			'especie'	=>	$_POST['especie'],
			'raza'	=>	$_POST['raza'],
			'sexo'	=>	$_POST['sexo'],
			'imagen'	=>	$_POST['imagen'],
			'idmascota'			=>	$_POST['idmascota']
		);
		$api_url = "http://localhost:8081/veterinaria_dermatovet/Capa_service/test_api.php?action=editar_mascotas";   
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);
		$result = json_decode($response, true);
		foreach($result as $keys => $values)
		{
			if($result[$keys]['success'] == '1')
			{
				echo 'update';
			}
			else
			{
				echo 'error';
			}
		}
	}
	if($_POST["action"] == 'delete')
	{
		$id = $_POST['id'];
		$api_url = "http://localhost:8081/service/api/test_api.php?action=delete&id=".$id.""; 
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}
	if($_POST["action"] == 'eliminar_producto')
	{
		$idproducto = $_POST['idproducto'];
		$api_url = "http://localhost:8081/service/api/test_api.php?action=eliminar_producto&idproducto=".$idproducto."";
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}
	if($_POST["action"] == 'eliminar_cliente')
	{
		$id = $_POST['id'];
		$api_url = "http://localhost:8081/service/api/test_api.php?action=eliminar_cliente&id=".$id."";
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}
	if($_POST["action"] == 'eliminar_usuario')
	{
		$idusu = $_POST['idusu'];
		$api_url = "http://localhost:8081/service/api/test_api.php?action=eliminar_usuario&idusu=".$idusu."";
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}

	if($_POST["action"] == 'eliminar_reserva')
	{
		$idreserva = $_POST['idreserva'];
		$api_url = "http://localhost:8081/service/api/test_api.php?action=eliminar_reserva&idreserva=".$idreserva."";
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}
	if($_POST["action"] == 'eliminar_mascota')
	{
		$idmascota = $_POST['idmascota'];
		$api_url = "http://localhost:8081/service/api/test_api.php?action=eliminar_mascota&idmascota=".$idmascota."";
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}
}


?>
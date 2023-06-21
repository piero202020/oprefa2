<?php


class Dao
{

	private $connect = '';

	function __construct()
	{
		$this->database_connection();
	}
	function user(){
          header("Location: ../Capa_presentacion/menu.php");

    }
    function user2(){
          header("Location: ../Capa_presentacion/menu2.php");
    }
    function user8(){
          header("Location: ../Capa_presentacion/cliente.php");

    }
    function user22(){
          header("Location: ../Capa_presentacion/reserva.php");

    }
    function user17(){
          header("Location: ../Capa_presentacion/index.php");

    }
    function user4(){
          header("Location: ../Capa_presentacion/mascota.php");
    }
     
    function user3(){
          header("Location: ../Capa_presentacion/editar_producto.php");

    }
    function user7(){
          header("Location: ../Capa_presentacion/editar_cliente.php");

    }
    function user9(){
          header("Location: ../Capa_presentacion/registro_mascota.php");

    } 
    function user5(){
          header("Location: ../Capa_presentacion/editar_mascota.php");

    } 
    function user15(){
          header("Location: ../Capa_presentacion/editar_usuario.php");

    } 
     function user88(){
          header("Location: ../Capa_presentacion/usuario.php");

    } 
    function user6(){
          header("Location: ../Capa_presentacion/registrar_vacuna.php");

    } 
    function user10(){
          header("Location: ../Capa_presentacion/registrar_consulta.php");

    } 


	function database_connection()
	{
		$this->connect = new PDO("mysql:host=localhost;dbname=bdhistorial", "root", "");
	}
	 
    function insert()
	{
		if(isset($_POST["first_name"]))
		{
			$form_data = array(
				':first_name'		=>	$_POST["first_name"],
				':last_name'		=>	$_POST["last_name"]
			);
			$query = "
			INSERT INTO tbl_sample 
			(first_name, last_name) VALUES 
			(:first_name, :last_name)
			";
			$statement = $this->connect->prepare($query);
			if($statement->execute($form_data))
			{
				$data[] = array(
					'success'	=>	'1'
				);
			}
			else
			{
				$data[] = array(
					'success'	=>	'0'
				);
			}
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}

function insertar_cliente()
	{
		if(isset($_POST["nombre"]))
		{
			$form_data = array(
				':nombre'		=>	$_POST["nombre"],
				':apellido'		=>	$_POST["apellido"],
				':dni'		=>	$_POST["dni"],
				':celular'		=>	$_POST["celular"],
				':domicilio'		=>	$_POST["domicilio"],
				':imagen'		=>	$_POST["imagen"],
				':estado'		=>	$_POST["estado"],
				':respuesta'		=>	$_POST["respuesta"]
			 );
			$query = "
			INSERT INTO cliente 
			(nombre,apellido,dni,celular,domicilio,imagen,estado,respuesta) VALUES 
			(:nombre,:apellido,:dni,:celular,:domicilio,:imagen,:estado,:respuesta)
			";
			$statement = $this->connect->prepare($query);
			if($statement->execute($form_data))
			{
				 $this->user8();
			}
			else
 			{
				$data[] = array(
					'success'	=>	'0'
				);
			}
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}
function insertar_usuario()
	{
		if(isset($_POST["nombre"]))
		{
			$form_data = array(
				':nombre'		=>	$_POST["nombre"],
				':apellido'		=>	$_POST["apellido"],
				':usuario'		=>	$_POST["usuario"],
				':pass'		=>	$_POST["pass"],
				':tipo'		=>	$_POST["tipo"],
				':dni'		=>	$_POST["dni"],
				':telefono'		=>	$_POST["telefono"],
				':direccion'		=>	$_POST["direccion"],
				':imagen'		=>	$_POST["imagen"]
			 );
			$query = "
			INSERT INTO usuarios 
			(nombre,apellido,usuario,pass,tipo,dni,telefono,direccion,imagen) VALUES 
			(:nombre,:apellido,:usuario,:pass,:tipo,:dni,:telefono,:direccion,:imagen)
			";
			$statement = $this->connect->prepare($query);
			if($statement->execute($form_data))
			{
				 $this->user88();
			}
			else
 			{
				$data[] = array(
					'success'	=>	'0'
				);
			}
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}
function registrar_mascota()
	{
		if(isset($_POST["nombre"]))
		{
			$form_data = array(
				':nombre'		=>	$_POST["nombre"],
				':especie'		=>	$_POST["especie"],
				':raza'		=>	$_POST["raza"],
				':sexo'		=>	$_POST["sexo"],
				':dni'		=>	$_POST["dni"],
				':imagen'		=>	$_POST["imagen"]
			 );
			$query = "
			INSERT INTO animal 
			(nombre,especie,raza,sexo,dni,imagen) VALUES 
			(:nombre,:especie,:raza, :sexo,:dni,:imagen)
			";
			$statement = $this->connect->prepare($query);
		 	if($statement->execute($form_data))
			{
				
				 $this->user8();

			}
			else
 			{
				 
				$data[] = array(
					'success'	=>	'0'
				);
			}
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}

	function insertar_producto()
	{
		if(isset($_POST["nombre"]))
		{
			$form_data = array(
				':nombre'		=>	$_POST["nombre"],
				':Gender'		=>	$_POST["Gender"],
				':tipo'		=>	$_POST["tipo"],
				':descripcion'		=>	$_POST["descripcion"],
				':precio'		=>	$_POST["precio"],
				':cantidad'		=>	$_POST["cantidad"],
				':imagen'		=>	$_POST["imagen"]
			 );
			$query = "
			INSERT INTO producto 
			(nombre,proveedor,tipo, descripcion,precio,cantidad,imagen) VALUES 
			(:nombre,:Gender,:tipo, :descripcion,:precio,:cantidad,:imagen)
			";
			$statement = $this->connect->prepare($query);
			if($statement->execute($form_data))
			{
				 $this->user2();
			}
			else
 			{
				$data[] = array(
					'success'	=>	'0'
				);
			}
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}

function registrar_consulta()
	{
		if(isset($_POST["sintomas"]))
		{
			$form_data = array(
			 
				':fecha'		=>	$_POST["fecha"],
				':sintomas'		=>	$_POST["sintomas"],
				':diagnostico'		=>	$_POST["diagnostico"],
				':idmascota'		=>	$_POST["idmascota"]
			  );
			$query = "
			INSERT INTO consulta 
			(fecha,sintomas,diagnostico,idmascota) VALUES 
(:fecha,:sintomas,:diagnostico,:idmascota)
			";
		   $statement = $this->connect->prepare($query);
			 if($statement->execute($form_data))
			{  $this->user4();
			}
			else
 			{ 	$data[] = array(
					'success'	=>	'hay un error aqui'
				);
			}
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}

function registrar_vacuna()
	{
		if(isset($_POST["vacunacion"]))
		{
			$form_data = array(
			 
				':fechaprogramada'		=>	$_POST["fechaprogramada"],
				':vacunacion'		=>	$_POST["vacunacion"],
				':hora'		=>	$_POST["hora"],
				':idmascota'		=>	$_POST["idmascota"]
			  );
			$query = "
			INSERT INTO vacuna 
			(fechaprogramada,vacunacion,hora,idmascota) VALUES 
(:fechaprogramada,:vacunacion,:hora,:idmascota)
			";
		   $statement = $this->connect->prepare($query);
			 if($statement->execute($form_data))
			{  $this->user4();
			}
			else
 			{ 	$data[] = array(
					'success'	=>	'hay un error aqui'
				);
			}
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}

function registrar_reserva()
	{
		if(isset($_POST["nombre"]))
		{
			$form_data = array(
			 
				':fecha'		=>	$_POST["fecha"],
				':hora'		=>	$_POST["hora"],
				':nombre'		=>	$_POST["nombre"],
				':telefono'		=>	$_POST["telefono"],
				':dni'		=>	$_POST["dni"],
				':correo'		=>	$_POST["correo"],
				':direccion'		=>	$_POST["direccion"],
				':estado'		=>	$_POST["estado"]
			 );
			$query = "
			INSERT INTO reserva 
			(diacita,horacita,nombre,telefono,dni,correo,direccion,estado) VALUES 
(:fecha,:hora,:nombre,:telefono,:dni,:correo,:direccion,:estado)
			";
		 
			$statement = $this->connect->prepare($query);
			 
			if($statement->execute($form_data))
			{
			 
				 $this->user17();
			}
			else
 			{
				$data[] = array(
					'success'	=>	'hay un error aqui'
				);
			}
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}

function editar_mascotas()
	{
		if(isset($_POST["nombre"]))
		{
			$form_data = array(
				':nombre'		=>	$_POST["nombre"],
				':dni'		=>	$_POST["dni"],
				':especie'		=>	$_POST["especie"],
				':raza'		=>	$_POST["raza"],
				':sexo'		=>	$_POST["sexo"],
				':imagen'		=>	$_POST["imagen"],
				':idmascota'		=>	$_POST["idmascota"],
			);
			$query = "
			UPDATE animal 
			SET nombre = :nombre, dni = :dni, especie = :especie, raza = :raza,sexo = :sexo ,imagen = :imagen 
			WHERE idmascota = :idmascota
			";
			$statement = $this->connect->prepare($query);
			if($statement->execute($form_data))
			{
		   $this->user4();
			 }
			else
			{
				$data[] = array(
					'success'	=>	'0'
				);
			}
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}

	function editar_admin()
	{
		if(isset($_POST["nombre"]))
		{
			$form_data = array(
				':nombre'		=>	$_POST["nombre"],
				
				':apellido'		=>	$_POST["apellido"],
				':usuario'		=>	$_POST["usuario"],
				':pass'		=>	$_POST["pass"],
				':tipo'		=>	$_POST["tipo"],
				':dni'		=>	$_POST["dni"],
				':telefono'		=>	$_POST["telefono"],
				':direccion'		=>	$_POST["direccion"],
				':imagen'		=>	$_POST["imagen"],
				':idusu'		=>	$_POST["idusu"],
			);
			$query = "
			UPDATE usuarios 
			SET nombre = :nombre, apellido = :apellido, usuario = :usuario, pass = :pass, tipo = :tipo, dni = :dni, telefono = :telefono,direccion = :direccion,imagen = :imagen
			WHERE idusu = :idusu
			";
			$statement = $this->connect->prepare($query);
			if($statement->execute($form_data))
			{
			 
					 $this->user88();
		 
			}
			else
			{
				$data[] = array(
					'success'	=>	'0'
				);
			}
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}

	function editar_producto()
	{
		if(isset($_POST["nombre"]))
		{
			$form_data = array(
				':nombre'		=>	$_POST["nombre"],
				':descripcion'		=>	$_POST["descripcion"],
				':precio'		=>	$_POST["precio"],
				':cantidad'		=>	$_POST["cantidad"],
				':imagen'		=>	$_POST["imagen"],
				':idproducto'		=>	$_POST["idproducto"],
			);
			$query = "
			UPDATE producto 
			SET nombre = :nombre, descripcion = :descripcion, precio = :precio, cantidad = :cantidad,imagen = :imagen
			WHERE idproducto = :idproducto
			";
			$statement = $this->connect->prepare($query);
			if($statement->execute($form_data))
			{
			//	$data[] = array(
				//	'success'	=>	'1'
					 $this->user2();
			//	);
			}
			else
			{
				$data[] = array(
					'success'	=>	'0'
				);
			}
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}

function actualizar_estado()
	{
		if(isset($_POST["nombre"]))
		{
			$form_data = array(
			 	':idreserva'		=>	$_POST["idreserva"],
				':diacita'		=>	$_POST["diacita"],
				':horacita'		=>	$_POST["horacita"],
				':nombre'		=>	$_POST["nombre"],
				':telefono'		=>	$_POST["telefono"],
				':dni'		=>	$_POST["dni"],
				':correo'		=>	$_POST["correo"],
				':direccion'		=>	$_POST["direccion"],
				':estado'		=>	$_POST["estado"]
			 );
			$query = "
			UPDATE reserva 
			SET  diacita = :diacita, horacita = :horacita, nombre = :nombre, telefono = :telefono, dni = :dni, correo = :correo,direccion = :direccion ,estado = :estado
			WHERE idreserva = :idreserva
			";
		 
			$statement = $this->connect->prepare($query);
			 
			if($statement->execute($form_data))
			{
			 $this->user22();
			}
			else
 			{
				$data[] = array(
					'success'	=>	'hay un error aqui'
				);
			}
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}

	 

	function buscar_mascota($idmascota)
	{
		$query = "SELECT * FROM animal WHERE idmascota='".$idmascota."'";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				  $data[] = $row;
			}
			if($data >0){
				$this->user5();
			}
			return $data;	 
	}}
	function buscar_usuario($idusu)
	{
		$query = "SELECT * FROM usuarios WHERE idusu='".$idusu."'";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				  $data[] = $row;
			}
			if($data >0){
				$this->user15();
			}
			return $data;	 
	}}
	function buscar_mascota2($idmascota)
	{
		$query = "SELECT * FROM animal WHERE idmascota='".$idmascota."'";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				  $data[] = $row;
			}
			if($data >0){
				$this->user6();
			}
			return $data;	 
	}}
	function buscar_mascota3($idmascota)
	{
		$query = "SELECT * FROM animal WHERE idmascota='".$idmascota."'";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				  $data[] = $row;
			}
			if($data >0){
				$this->user6();
			}
			return $data;	 
	}}

	function buscar_cliente($id)
	{
		$query = "SELECT * FROM cliente WHERE id='".$id."'";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				  $data[] = $row;
			}
			if($data >0){
				$this->user7();
			}
			return $data;	 
	}}
	function buscar_cliente2($dni)
	{
		$query = "SELECT * FROM cliente WHERE dni='".$dni."'";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				  $data[] = $row;
			}
			if($data >0){
				$this->user9();
			}
			return $data;	 
	}}

	function buscar_dni_mascota($dni)
	{
		$query = "SELECT * FROM animal WHERE dni='".$dni."'";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				  $data[] = $row;
			}
			if($data >0){
				$this->user9();
			}
			return $data;	 
	}}
	function buscar_producto($idproducto)
	{
		$query = "SELECT * FROM producto WHERE idproducto='".$idproducto."'";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				  $data[] = $row;
			}
			if($data >0){
				$this->user3();
			}
			return $data;

		 
		 
	}}

     
	function listar_producto()
	{
		$query = "SELECT * FROM producto";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = $row;
			}
			return $data;
		}
	}
	function listar_consulta()
	{
		$query = "SELECT * FROM consulta";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = $row;
			}
			return $data;
		}
	}
	function listar_confirmados()
	{
		$query = "SELECT * FROM usuarios";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = $row;
			}
			return $data;
		}
	}
	function listar_reserva()
	{
		$query = "SELECT * FROM reserva";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = $row;
			}
			return $data;
		}
	}
	function listar_vacuna()
	{
		$query = "SELECT * FROM vacuna";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = $row;
			}
			return $data;
		}
	}
	 

	function listar_animales()
	{
		$query = "SELECT * FROM animal";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = $row;
			}
			return $data;
		}
	}

	function listar_cliente()
	{
		$query = "SELECT * FROM cliente";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			while($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				$data[] = $row;
			}
			return $data;
		}
	}
	function login($usuario,$pass)
	{
		$query ="SELECT * FROM usuarios WHERE usuario='".$usuario."' and pass='".$pass."'";
		$statement = $this->connect->prepare($query);
		$tipos="pensionista";
		$tipos2="recepcion";
		if($statement->execute())
		{ foreach($statement->fetchAll() as $row)
			{
				 
		 	 if($tipos===$data['tipo'] = $row['tipo']){
		 	$this->user(); 
		 }elseif ($tipos2===$data['tipo'] = $row['tipo']) {
					 $this->user2();
				}
			}
		  return $data;
		 
		}
	}

	function editar_cliente()
	{
		if(isset($_POST["dni"]))
		{
			$form_data = array(
				':dni'		=>	$_POST["dni"],
				':nombre'		=>	$_POST["nombre"],
				':apellido'		=>	$_POST["apellido"],
				':celular'		=>	$_POST["celular"],
				':domicilio'		=>	$_POST["domicilio"],
				':imagen'		=>	$_POST["imagen"],
				':estado'		=>	$_POST["estado"],
				':respuesta'		=>	$_POST["respuesta"],
				':id'		=>	$_POST["id"],
			);
			$query = "
			UPDATE cliente 
			SET dni = :dni, nombre = :nombre, apellido = :apellido, celular = :celular,domicilio = :domicilio ,imagen = :imagen,estado = :estado ,respuesta = :respuesta
			WHERE id = :id
			";
			$statement = $this->connect->prepare($query);
			if($statement->execute($form_data))
			{
			 
					 $this->user8();
			 
			}
			else
			{
				$data[] = array(
					'success'	=>	'0'
				);
			}
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}

     function eliminar_producto($idproducto)
	{
		$query = "DELETE FROM producto WHERE idproducto = '".$idproducto."'";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			 
			 $this->user2();
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}
	function eliminar_cliente($id)
	{
		$query = "DELETE FROM cliente WHERE id = '".$id."'";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			 
			 $this->user8();
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}
	function eliminar_usuario($idusu)
	{
		$query = "DELETE FROM usuarios WHERE idusu = '".$idusu."'";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			 
			 $this->user88();
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}
	function eliminar_reserva($idreserva)
	{
		$query = "DELETE FROM reserva WHERE idreserva = '".$idreserva."'";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			 
			 $this->user22();
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}
	function eliminar_mascota($idmascota)
	{
		$query = "DELETE FROM animal WHERE idmascota = '".$idmascota."'";
		$statement = $this->connect->prepare($query);
		if($statement->execute())
		{
			 //$query2 = "DELETE FROM animal WHERE idmascota = '".$idmascota."'";
			//$statement2 = $this->connect->prepare($query2);
			 $this->user4();
		}
		else
		{
			$data[] = array(
				'success'	=>	'0'
			);
		}
		return $data;
	}
}



?>
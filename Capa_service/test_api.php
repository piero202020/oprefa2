<?php



include('../Capa_negocio/Dao.php');

$api_object = new Dao();

if($_GET["action"] == 'listar_producto')
{
	$data = $api_object->listar_producto();
}
if($_GET["action"] == 'listar_confirmados')
{
	$data = $api_object->listar_confirmados();
}
if($_GET["action"] == 'listar_reserva')
{
	$data = $api_object->listar_reserva();
}
if($_GET["action"] == 'listar_vacuna')
{
	$data = $api_object->listar_vacuna();
}
if($_GET["action"] == 'listar_consulta')
{
	$data = $api_object->listar_consulta();
}
 
if($_GET["action"] == 'listar_animales')
{
	$data = $api_object->listar_animales();
}

if($_GET["action"] == 'insertar_usuario')
{
	$data = $api_object->insertar_usuario();
}
 
if($_GET["action"] == 'insertar_producto')
{
	$data = $api_object->insertar_producto();
}
if($_GET["action"] == 'insertar_cliente')
{
	$data = $api_object->insertar_cliente();
}
if($_GET["action"] == 'registrar_reserva')
{
	$data = $api_object->registrar_reserva();
}
if($_GET["action"] == 'registrar_mascota')
{
	$data = $api_object->registrar_mascota();
}
if($_GET["action"] == 'registrar_consulta')
{
	$data = $api_object->registrar_consulta();
}
if($_GET["action"] == 'registrar_vacuna')
{
	$data = $api_object->registrar_vacuna();
}
if($_GET["action"] == 'actualizar_estado')
{
	$data = $api_object->actualizar_estado();
}
 
if($_GET["action"] == 'buscar_producto')
{
	$data = $api_object->buscar_producto($_GET["idproducto"]);
}
if($_GET["action"] == 'buscar_usuario')
{
	$data = $api_object->buscar_usuario($_GET["idusu"]);
}
if($_GET["action"] == 'buscar_mascota')
{
	$data = $api_object->buscar_mascota($_GET["idmascota"]);
}
if($_GET["action"] == 'buscar_mascota2')
{
	$data = $api_object->buscar_mascota2($_GET["idmascota"]);
}
if($_GET["action"] == 'buscar_mascota3')
{
	$data = $api_object->buscar_mascota3($_GET["idmascota"]);
}
if($_GET["action"] == 'buscar_cliente')
{
	$data = $api_object->buscar_cliente($_GET["id"]);
}
if($_GET["action"] == 'buscar_cliente2')
{
	$data = $api_object->buscar_cliente2($_GET["dni"]);
}
if($_GET["action"] == 'buscar_dni_mascota')
{
	$data = $api_object->buscar_dni_mascota($_GET["dni"]);
}
if($_GET["action"] == 'editar_mascotas')
{
	$data = $api_object->editar_mascotas();
}
if($_GET["action"] == 'editar_admin')
{
	$data = $api_object->editar_admin();
}
if($_GET["action"] == 'editar_producto')
{
	$data = $api_object->editar_producto();
}
if($_GET["action"] == 'editar_cliente')
{
	$data = $api_object->editar_cliente();
}
 
if($_GET["action"] == 'eliminar_producto')
{
	$data = $api_object->eliminar_producto($_POST["idproducto"]);
}
if($_GET["action"] == 'eliminar_mascota')
{
	$data = $api_object->eliminar_mascota($_POST["idmascota"]);
}
if($_GET["action"] == 'eliminar_cliente')
{
	$data = $api_object->eliminar_cliente($_POST["id"]);
}
if($_GET["action"] == 'eliminar_reserva')
{
	$data = $api_object->eliminar_reserva($_POST["idreserva"]);
}
if($_GET["action"] == 'login')
{
	$data = $api_object->login($_POST["usuario"],$_POST["pass"]);
}
if($_GET["action"] == 'listar_cliente')
{
	$data = $api_object->listar_cliente();
}
if($_GET["action"] == 'eliminar_usuario')
{
	$data = $api_object->eliminar_usuario($_POST["idusu"]);
}


echo json_encode($data);

?>
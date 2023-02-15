<?php 
session_start();
include_once "variables_db.php";
include_once "Mysqli.php";
include_once "Fechas.php";
$db = new dbConn();


if($_REQUEST["op"] == "1"){ // para guardar los datos del cliente

if($_POST["nombres"] == NULL){
 echo "El Nombre es requerido";
}elseif($_POST["apellidos"] == NULL){
 echo "Los Apellidos son requeridos";
}elseif($_POST["negocio"] == NULL){
 echo "El negocio es requerido";
}elseif($_POST["pais"] == NULL){
 echo "El pais es requerido";
}elseif($_POST["departamento"] == NULL){
 echo "El departamento es requerido";
}elseif($_POST["municipio"] == NULL){
 echo "El municipio es requerido";
}elseif($_POST["direccion"] == NULL){
 echo "La direción es requerida";
}elseif($_POST["email"] == NULL){
 echo "El email es requerido";
}elseif($_POST["telefono"] == NULL){
 echo "El Telefono es requerido";
} else {


/// obtiene el correlativo dde los td de los sistemas

        if ($r = $db->select("correlativo", "system_correlativo", "where tipo = '".$_SESSION["tipo_sistema"]."'")) { 
        	$correlativo = $r["correlativo"];
        } unset($r); 

            $_SESSION["td"] = $correlativo + 1;

            $datos= array();
            $datos = $_POST;
            $datos["tipo_sistema"] = $_SESSION["tipo_sistema"];
            $datos["plan"] = $_SESSION["plan"];
            $datos["tipo_negocio"] = $_SESSION["pnombre"];
            $datos["precio"] = $_SESSION["plan_precio"];
            $datos["fecha"] = date("d-m-Y");
            $datos["fechaF"] = Fechas::Format(date("d-m-Y"));
            $datos["hora"] = date("H:i:s");
            $datos["td"] = $_SESSION["td"];

        if ($db->insert("empresa_online_cliente", $datos)) {

        	    $cambio = array();
    		    $cambio["correlativo"] = $_SESSION["td"];
    		    $db->update("system_correlativo", $cambio, "WHERE tipo='".$_SESSION["tipo_sistema"]."'");
        
            echo '<script>
    			window.location.href="checkout_pay"
    		</script>';
        }

} // else 

}


if($_REQUEST["op"] == "2"){ // para guardar los datos de la compra

// debo generar la fecha de vencimiento para el plan
if($_SESSION["plan_type"] == "1"){ // si es un mes
    $vencera = Fechas::SiguientePago(date("d-m-Y"));
}
if($_SESSION["plan_type"] == "2"){ // si es un mes
    $vencera = "31-12-2025";
}
if($_SESSION["plan_type"] == "3"){ // si es un mes
    $ano = date("Y") + 1;
    $vencera = date("d-m-" . $ano);
}

    $cambio = array();
    $cambio["vence"] = $vencera;
    $cambio["venceF"] = Fechas::Format($vencera);
    $db->update("empresa_online_cliente", $cambio, "WHERE td='".$_SESSION["td"]."'");

// 
 

$datos= array();
$datos = $_POST;
$datos["tipo_sistema"] = $_SESSION["tipo_sistema"];
$datos["plan"] = $_SESSION["plan"];
$datos["tipo_negocio"] = $_SESSION["pnombre"];
$datos["fecha"] = date("d-m-Y");
$datos["fechaF"] = Fechas::Format(date("d-m-Y"));
$datos["hora"] = date("H:i:s");
$datos["td"] = $_SESSION["td"];


    if ($db->insert("empresa_online_pagos", $datos)) {

        echo '<h1 class="text-center">Se ha realizado su transacción correctamente</h1>
			<p>Por favor revise su email, ahi obtendrá las indicaciones de como ingresar a su sistema <br> Si tiene alguna duda por favor no dude en ponerse en contacto con nosotros con mucho gusto le adenderemos todas sus dudas o inquitudes</p>';

        echo '<a href="admin/" class="price_btn btn_hover btm-sm">Ingresar</a>';

    }


}




$db->close();
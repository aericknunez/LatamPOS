<?php 
session_start();


if($_SESSION["pselect"] != NULL){
	if($_SESSION["pselect"] != $_COOKIE["pselect"]){
		setcookie("pselect", $_SESSION["pselect"], time() + 60*60*24*365); 
		setcookie("pnombre", $_SESSION["pnombre"], time() + 60*60*24*365); 
		setcookie("ptype", $_SESSION["ptype"], time() + 60*60*24*365); 
	}
}



	if($_SESSION["pselect"] == NULL){
	    if($_COOKIE["pselect"] != NULL){
	      $_SESSION["pselected"] = $_COOKIE["pselect"];
	      $_SESSION["pnombre"] = $_COOKIE["pnombre"];
	      $_SESSION["ptype"] = $_COOKIE["ptype"];	      
	    }
	}


include_once 'body/includes/Clases.php';
$_SESSION["lasturl"] = Helpers::LastUrl();



// seleccionar el plan
if($_REQUEST["plan_type"] == 1 or $_REQUEST["plan_type"] ==3){
	$_SESSION["plan_id"] = Helpers::SelectPlan($_REQUEST["plan"], $_REQUEST["plan_type"]); // selecciona el id de paypal
}
$_SESSION["plan_nombre"] = Helpers::PlanNombre($_REQUEST["plan"]);
$_SESSION["plan_precio"] = Helpers::PlanPrecio($_REQUEST["plan"], $_REQUEST["plan_type"]);
$_SESSION["plan_type"] = $_REQUEST["plan_type"]; // 1 mensual 2. life 3. anual
$_SESSION["plan"] = $_REQUEST["plan"]; // 1 basico, 2 profesional, 3 premium

if($_SESSION["ptype"] == "P"){
	$_SESSION["tipo_sistema"] = 2;
}
if($_SESSION["ptype"] == "R"){
	$_SESSION["tipo_sistema"] = 1;
}


if($_SESSION["plan_precio"] != NULL and $_SESSION["ptype"] != NULL and $_SESSION["plan_type"] != NULL){

// descripcion
if($_SESSION["plan_type"] == "1"){
	$_SESSION["plan_descripcion"] = "Sistema para " . $_SESSION["pnombre"] . " - " . $_SESSION["plan_nombre"] . " Pago Mensual";
}
if($_SESSION["plan_type"] == "2"){
	$_SESSION["plan_descripcion"] = "Sistema para " . $_SESSION["pnombre"] . " - " . $_SESSION["plan_nombre"] . " Un sólo pago";
}
if($_SESSION["plan_type"] == "3"){
	$_SESSION["plan_descripcion"] = "Sistema para " . $_SESSION["pnombre"] . " - " . $_SESSION["plan_nombre"] . " Pago Anual";
}

	if($_SESSION["plan_type"] != NULL){
		header("location: checkout_pay");
	}else {
		header("location: checkout");		
	}


} else {
	header("location: precios");
}
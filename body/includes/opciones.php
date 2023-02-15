<?php 
session_start();

switch ($_REQUEST["op"]) {
	case '1':
		$_SESSION["pselect"] = $_REQUEST["op"];
		$_SESSION["pnombre"] = "Farmacia";
		$_SESSION["ptype"] = "P";
		break;
	case '2':
		$_SESSION["pselect"] = $_REQUEST["op"];
		$_SESSION["pnombre"] = "Super Mercado";
		$_SESSION["ptype"] = "P";
		break;
	case '3':
		$_SESSION["pselect"] = $_REQUEST["op"];
		$_SESSION["pnombre"] = "Restaurante";
		$_SESSION["ptype"] = "R";
		break;
	case '4':
		$_SESSION["pselect"] = $_REQUEST["op"];
		$_SESSION["pnombre"] = "Tienda o Abarrotería";
		$_SESSION["ptype"] = "P";
		break;
	case '5':
		$_SESSION["pselect"] = $_REQUEST["op"];
		$_SESSION["pnombre"] = "Comida Rápida";
		$_SESSION["ptype"] = "R";
		break;
	case '6':
		$_SESSION["pselect"] = $_REQUEST["op"];
		$_SESSION["pnombre"] = "Ferretería";
		$_SESSION["ptype"] = "P";
		break;
	case '7':
		$_SESSION["pselect"] = $_REQUEST["op"];		
		$_SESSION["pnombre"] = "Cafetería";
		$_SESSION["ptype"] = "R";
		break;
	case '8':
		$_SESSION["pselect"] = $_REQUEST["op"];
		$_SESSION["pnombre"] = "Agroservicio";
		$_SESSION["ptype"] = "P";
		break;
	case '9':
		$_SESSION["pselect"] = $_REQUEST["op"];
		$_SESSION["pnombre"] = "Libreria";
		$_SESSION["ptype"] = "P";
		break;
	case '10':
		$_SESSION["pselect"] = $_REQUEST["op"];
		$_SESSION["pnombre"] = "Pizzería";
		$_SESSION["ptype"] = "R";
		break;
	case '11':
		$_SESSION["pselect"] = $_REQUEST["op"];
		$_SESSION["pnombre"] = "Comercial";
		$_SESSION["ptype"] = "P";
		break;
	case '12':
		$_SESSION["pselect"] = $_REQUEST["op"];
		$_SESSION["pnombre"] = "Zapatería";
		$_SESSION["ptype"] = "P";
		break;

}


if($_SESSION["pselect"] != $_COOKIE["pselect"]){
	setcookie("pselect", $_SESSION["pselect"], time() + 60*60*24*365); 
	setcookie("pnombre", $_SESSION["pnombre"], time() + 60*60*24*365); 
	setcookie("pnombre", $_SESSION["ptype"], time() + 60*60*24*365); 
}


echo '<script>
	window.location.href="'.$_SESSION["lasturl"].'";
</script>';
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

 Helpers::UnsetVariables();







include_once 'body/head.php';
?>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZ7G9WW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?
include_once 'body/preloader.php';
?>

	<div class="body_wrapper">

<?php 
include_once 'body/header2.php';

include_once 'body/bannerHeader2.php';


include_once 'body/contactoInfo.php';
include_once 'body/contactoMap.php';


include_once 'body/footer2.php';

include_once 'body/searchModal.php';
include_once 'body/productoModal.php';
 ?>

    </div>

<?php 
include_once 'body/query.php';
include_once 'body/queryContacto.php';
include_once 'body/queryMain.php';
 ?>




</body>
</html>
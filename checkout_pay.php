<?php 
session_start();
include_once 'body/includes/variables_db.php';

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

$urlCheckout = "pay";

/// solo para pay checkout

if(($_SESSION["plan_id"] == NULL and $_SESSION["plan_type"] == NULL) or $_SESSION["td"] == NULL){ 

header("location: checkout");

}







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

include_once 'body/bannerHeader3.php';


include_once 'body/checkout2.php';


include_once 'body/footer2.php';

include_once 'body/searchModal.php';
include_once 'body/productoModal.php';
 ?>

    </div>

<?php 
include_once 'body/query.php';
include_once 'body/queryMain.php';
 ?>




</body>
</html>
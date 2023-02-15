<?php
date_default_timezone_set('America/El_Salvador');


define("HOST", "localhost"); 			//35.225.56.157 The host you want to connect to. 
define("USER", "root"); 			// The database username. 
define("PASSWORD", "erick"); 	// The database password. 
define("DATABASE", "hibridoapp"); 

// define("HOST", "localhost"); 			//35.225.56.157 The host you want to connect to. 
// define("USER", "superpol_erick"); 			// The database username. 
// define("PASSWORD", "caca007125-"); 	// The database password.
// define("DATABASE", "superpol_hibridoapp");
  

define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");
define("SECURE", FALSE);    // For development purposes only!!!!

// para el sistema
define("BASE_URL", "https://latam-pos.com/admin/");
define("BASEPATH", "https://latam-pos.com/admin/");	


 $sandbox = "Afdf7Xg28GoCU2p7JNWgfD-k0FoaPabyaQuM2qKey3pUyd0q9lgz189lO8oieAvXmhqVfMJkNV1EmMmK";	
 $live =  "AQz998Uow_h7htjqT7FVijAqwrHj0Sk-9lTq_y7q6q0HSAC3fQ2B94LBb5-_cpcv031IfgBwifeRWvrR";	

define("CLIENT_ID", $sandbox);	


?>
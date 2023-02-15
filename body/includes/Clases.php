<?php
class Helpers{

    public function __construct(){

    } 


    public static function ServerDomain(){
          if($_SERVER["SERVER_NAME"] == "latam-pos.com" 
          or $_SERVER["SERVER_NAME"] == "www.latam-pos.com"){
            return TRUE;
          } else {
            return FALSE;
          }
    }

    public static function LastUrl(){

        if(self::ServerDomain() == TRUE){
          define("HOST_URL", "https://");
          define("MY_URL", "https://latam-pos.com/");
        } else{
          define("HOST_URL", "http://");
          define("MY_URL", HOST_URL . $_SERVER["HTTP_HOST"] ."/latam-pos-web-pos/");
        }

      return $_SESSION["last_url"] = HOST_URL . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  }



public static function SelectPlan($plan, $tipo){

/// mensual
   if($tipo == 1){ // mensual

      if($plan == "1"){
        $nPlan = "P-31753904FE842080VL4SEL2A"; // basico
      }
      if($plan == "2"){
        $nPlan = "P-0D868080GX520364WL4SE6XQ"; // profesional
      }
      if($plan == "3"){
        $nPlan = "P-9NA73343014022901L4SFEXQ"; // premium
      }
}

  if($tipo == 3){

/// anual
    if($plan == "1"){
      $nPlan = "P-583035999D1917536L4S6BEQ"; // basico
    }
    if($plan == "2"){
      $nPlan = "P-2MP501853E961574FL4S6AGY"; // profesional
    }
    if($plan == "3"){
      $nPlan = "P-7KS48196N6268634HL4S6B4I"; // premium
    }
}
  return $nPlan;

}


public static function PlanNombre($plan){

  if($plan == "1"){
    $nPlan = "Básico"; // basico
  }
  if($plan == "2"){
    $nPlan = "Profesional"; // profesional
  }
  if($plan == "3"){
    $nPlan = "Premium"; // premium
  }

  return $nPlan;

}



public static function PlanPrecio($plan, $tipo){

  if($tipo == 1){ // mensual

    if($plan == "1"){
      $nPlan = 16; // basico
    }
    if($plan == "2"){
      $nPlan = 24; // profesional
    }
    if($plan == "3"){
      $nPlan = 39; // premium
    }

  } 

  if($tipo == 2){ /// un apgo

    if($plan == "1"){
      $nPlan = 360; // basico
    }
    if($plan == "2"){
      $nPlan = 550; // profesional
    }
    if($plan == "3"){
      $nPlan = 870; // premium
    }

  }

  if($tipo == 3){ //anual

    if($plan == "1"){
      $nPlan = 172.80; // basico
    }
    if($plan == "2"){
      $nPlan = 259.20; // profesional
    }
    if($plan == "3"){
      $nPlan = 421.20; // premium
    }

  }

  return $nPlan;

}




   static  public function Dinero($numero){  
        $format= "$" . number_format($numero,2,'.',',');
        return $format;
     } 


   static  public function UnsetVariables(){  

      if($_SESSION["plan_id"]){
          unset($_SESSION["plan_id"], 
                $_SESSION["plan_nombre"], 
                $_SESSION["plan_precio"],
                $_SESSION["plan_type"],
                $_SESSION["plan"],
                $_SESSION["tipo_sistema"],
                $_SESSION["plan_descripcion"],
                $_SESSION["td"]);
        }
     } 













} // class
?>
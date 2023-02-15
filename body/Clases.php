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
        } else{
          define("HOST_URL", "http://");
        }

      return $_SESSION["last_url"] = HOST_URL . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  }






} // class
?>
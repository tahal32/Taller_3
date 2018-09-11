<? php
include_once ("modelo / Modelo.php");

Controlador de clase {
 modelo público $;
 
 función pública __construct ()  
    {  
        $ this-> model = new Model ();

    } 
 
 invocación de función pública ()
 {
  
  $ reslt = $ this-> model-> getlogin ();    
  
  if ($ reslt == 'login')
  {
   incluye 'view / Afterlogin.php';
  }
  más
  {
   incluir 'view / login.php';
  }
  
 }
}

?>
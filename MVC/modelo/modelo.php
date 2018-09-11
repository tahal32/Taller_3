<? php

include_once ("modelo / Book.php");

clase modelo {

 función pública getlogin ()
 {
  if (isset ($ _ REQUEST ['username']) && isset ($ _ REQUEST ['password'])) {
  
   if ($ _ REQUEST ['username'] == 'admin' && $ _REQUEST ['password'] == 'admin') {
    devolver 'iniciar sesión';
   }
                        más{
    devolver 'usuario inválido';
   }
  }
 }
 
}

?>
<?php
session_start();
// ---
// la tarea de este archivo es eliminar todo rastro de cookie

// -- eliminamos el usuario
if(isset($_SESSION['client_id'])){
	unset($_SESSION['client_id']);
}

session_destroy();
// v0 29 jul 2013
//estemos donde estemos nos redirije al index
//https://github.com/JOYASPWEB/Avance-final.git
print "<script>window.location='./';</script>";
?>


<?php
//TODO: Aquest script únicament ha de tancar la sessió d’usuari i fer les operacions de neteja pertinents. En acabat, cal fer una redirecció a “index.php”.

session_start();
$_SESSION = array();
session_destroy();
setcookie(session_name(), '', time()-3600, '/');
header("location: ../../public/index.php");
exit();

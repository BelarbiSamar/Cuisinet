<?php
session_start ();
session_unset ();
session_destroy ();
header ('location: http://localhost/client/views/front/login.php');

?>
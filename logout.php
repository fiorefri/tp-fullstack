<?php
session_start();
session_destroy();
setcookie ("nombre", "", -1);
setcookie ("email", "", -1);

header("Location:index.php");
exit;

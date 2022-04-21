<?php
session_start();
session_destroy();
return header("Location:/myproject/customer/index.php?problem=logged%out%success");




?>

<?php
session_start();
session_destroy();
header('Location:Página-1.php');
exit();
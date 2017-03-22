<?php
session_start();
session_destroy();
header("Location: loginpg.php");
?>

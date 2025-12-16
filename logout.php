<-- This is the logout page -->
<?php
session_start();
session_destroy();
header("Location: index.php");
exit;
?>

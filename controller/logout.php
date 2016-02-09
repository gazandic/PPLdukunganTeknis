<!-- 
dibuat oleh gazandi cahyadarma
2/9/2016
 -->
<?php
// remove all session variables
session_start();
session_unset();

// destroy the session
session_destroy();
header("Location: ../index.php");
exit();
?>
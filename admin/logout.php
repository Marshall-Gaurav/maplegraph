<?php
    include('../connection.php');
    session_start();
	session_unset($_SESSION['id']);
	echo '<script>window.location="index.php"</script>';

?>

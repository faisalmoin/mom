
<?php
session_start();
if(empty($_SESSION['user'])){
	echo '<script>window.location.href="index.php"</script>';
}
?>

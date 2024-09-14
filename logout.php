<?php
session_start();
$_SESSION = array();

echo "<script>
alert('You have been successfully logged out.');
window.location.href = 'index.html';
</script>";

session_destroy();
?>

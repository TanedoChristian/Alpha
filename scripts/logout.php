
<?php

session_start();
session_destroy();

echo '<script>
alert("Account has been  Logout");
window.location.href="../index.php";
</script>';







?>
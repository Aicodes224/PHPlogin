<?php
 
 session_start();
 ?>
<html>
<head>
<title>HOME PAGE</title>
</head>
<body>
<h1><b>WELCOME <?php echo $_SESSION['username']; ?></b></h1>
</body>
</html>


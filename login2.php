<?php

$user=$_POST["user"];
$pwd=$_POST["password"];

?>
<html>
    <head><title>Login 2</title></head>
    <body>
        <table border='1'><tr>
        <td>Usuari</td><td><?php echo $user ?></td></tr>
        <tr><td>Contrasenya</td> <td><?php echo $pwd ?></td></tr></table>
    </body>
</html>

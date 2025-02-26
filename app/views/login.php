// app/views/login.php

?>
<form method="POST" action="index.php?route=login">
    <label for="correo">Correo:</label>
    <input type="email" name="correo" required>

    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" required>

    <button type="submit">Iniciar sesión</button>
</form>
<?php

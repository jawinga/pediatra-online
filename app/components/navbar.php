<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$isLoggedIn = isset($_SESSION['usuario_id']);
?>
<nav class="navbar" id="navbar">
    <div class="logo">
        <a href="./inicio.php">
            <img src="./img/logoPedivax.png" alt="PediVax">
        </a>
    </div>   
    <ul class="nav-links">
        <li><a href="#">Calendario</a></li>
        <li><a href="./quienesSomos.php">Quiénes somos</a></li>
        <li><a href="#">Recursos</a></li>
        <li><a href="./contacto.php">Contacto</a></li>
    </ul>

    <?php if ($isLoggedIn): ?>
        <div class="auth-buttons">
            <a href="../views/perfil.php" class="btn register btn-secondary"><strong>Ir al perfil</strong></a>
            <a href="./logout.php" class="btn login btn-primary"><strong>Cerrar Sesión</strong></a>
        </div>
    <?php else: ?>        
        <div class="auth-buttons">
            <a href="./login.php" class="btn login btn-primary"><strong>Iniciar Sesión</strong></a>
            <a href="./registro.php" class="btn register btn-secondary"><strong>Crear Cuenta</strong></a>
        </div>
    <?php endif; ?>

    <div class="menu-toggle">&#9776;</div> <!-- Icono tipo hamburguesa -->
</nav>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
/*require_once(__DIR__ . '/../config.php');*/

$isLoggedIn = isset($_SESSION['usuario_id']);
?>
<nav class="navbar" id="navbar">
    <div class="logo">
        <a href="/pediatra-online/app/views/inicio.php">
            <img src="/pediatra-online/app/views/img/logoPedivax.png" alt="PediVax">
        </a>
    </div>   
    <ul class="nav-links">
        <li><a href="/pediatra-online/app/views/calendario/calendario.php">Calendario</a></li>
        <li><a href="/pediatra-online/app/views/calendario/vacunas/vacunas.php">Vacunas</a></li>
        <li><a href="/pediatra-online/app/views/calendario/vacunas/porquevacunar.php">¿Por qué vacunar?</a></li>
        <li><a href="/pediatra-online/app/views/quienesSomos.php">Quiénes somos</a></li>
        <li><a href="/pediatra-online/app/views/recursos.php">Recursos</a></li>
        <li><a href="/pediatra-online/app/views/contacto.php">Contacto</a></li>
    </ul>

    <?php if ($isLoggedIn): ?>
        <div class="auth-buttons">
            <a href="/pediatra-online/app/views/perfil.php" class="btn login btn-primary">Ir al perfil</a>
            <a href="../controllers/logout.php" class="btn register btn-secondary">Cerrar Sesión</a>
        </div>
    <?php else: ?>        
        <div class="auth-buttons">
            <a href="/pediatra-online/app/views/login.php" class="btn login btn-primary">Iniciar Sesión</a>
            <a href="/pediatra-online/app/views/registro.php" class="btn register btn-secondary">Crear Cuenta</a>
        </div>
    <?php endif; ?>

    <div class="menu-toggle">&#9776;</div> <!-- Icono tipo hamburguesa -->
</nav>


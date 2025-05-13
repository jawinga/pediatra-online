<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once(__DIR__ . '/../config.php');

$isLoggedIn = isset($_SESSION['usuario_id']);
?>
<nav class="navbar" id="navbar">
    <div class="logo">
        <a href="<?= BASE_URL ?>app/views/inicio.php">
            <img src="<?= BASE_URL ?>app/views/img/logoPedivax.png" alt="PediVax">
        </a>
    </div>   
    <ul class="nav-links">
        <li><a href="<?= BASE_URL ?>app/views/index.php">Calendario</a></li>
        <li><a href="<?= BASE_URL ?>app/views/quienesSomos.php">Quiénes somos</a></li>
        <li><a href="<?= BASE_URL ?>app/views/recursos.php">Recursos</a></li>
        <li><a href="<?= BASE_URL ?>app/views/contacto.php">Contacto</a></li>
    </ul>

    <?php if ($isLoggedIn): ?>
        <div class="auth-buttons">
            <a href="<?= BASE_URL ?>app/views/perfil.php" class="btn register btn-secondary"><strong>Ir al perfil</strong></a>
            <a href="<?= BASE_URL ?>app/views/logout.php" class="btn login btn-primary"><strong>Cerrar Sesión</strong></a>
        </div>
    <?php else: ?>        
        <div class="auth-buttons">
            <a href="<?= BASE_URL ?>app/views/login.php" class="btn login btn-primary"><strong>Iniciar Sesión</strong></a>
            <a href="<?= BASE_URL ?>app/views/registro.php" class="btn register btn-secondary"><strong>Crear Cuenta</strong></a>
        </div>
    <?php endif; ?>

    <div class="menu-toggle">&#9776;</div> <!-- Icono tipo hamburguesa -->
</nav>
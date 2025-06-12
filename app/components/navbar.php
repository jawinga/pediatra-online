<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/pediatra-online/config/config.php'); ?>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$isLoggedIn = isset($_SESSION['usuario_id']);
?>
<!--Navbar-->
<nav class="navbar" id="navbar">
    <div class="logo">
        <a href="<?php echo BASE_URL; ?>app/views/inicio.php">
            <img src="<?php echo BASE_URL; ?>app/views/img/logoPedivax.png" alt="PediVax">
        </a>
    </div>   
    <ul class="nav-links">
        <li><a href="<?php echo BASE_URL; ?>app/views/calendario/calendario.php">Calendario</a></li>
        <li><a href="<?php echo BASE_URL; ?>app/views/calendario/vacunas/vacunas.php">Vacunas</a></li>
        <li><a href="<?php echo BASE_URL; ?>app/views/calendario/vacunas/porquevacunar.php">¿Por qué vacunar?</a></li>
        <li><a href="<?php echo BASE_URL; ?>app/views/quienesSomos.php">Quiénes somos</a></li>
        <li><a href="<?php echo BASE_URL; ?>app/views/recursos.php">Recursos</a></li>
        <li><a href="<?php echo BASE_URL; ?>app/views/contacto.php">Contacto</a></li>
    </ul>

    <?php if ($isLoggedIn): ?>
        <div class="auth-buttons">
            <a href="<?php echo BASE_URL; ?>app/views/perfil.php" class="btn login btn-primary">Ir al perfil</a>
            <a href="<?php echo BASE_URL; ?>app/controllers/logout.php" class="btn register btn-secondary">Cerrar Sesión</a>
        </div>
    <?php else: ?>        
        <div class="auth-buttons">
            <a href="<?php echo BASE_URL; ?>app/views/login.php" class="btn login btn-primary">Iniciar Sesión</a>
            <a href="<?php echo BASE_URL; ?>app/views/registro.php" class="btn register btn-secondary">Crear Cuenta</a>
        </div>
    <?php endif; ?>

    <div class="menu-toggle">&#9776;</div> <!-- Icono tipo hamburguesa -->
</nav>


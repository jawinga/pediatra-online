<?php
session_start();
require_once __DIR__ . '../../../config/database.php';
require_once __DIR__ . '../../controllers/HijoController.php';

if (!isset($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit;
}

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: inicio.php");
    exit;
}

$hijo_id = (int)$_GET['id'];
$hijoController = new HijoController($conn);
$data = $hijoController->getPerfilHijo($hijo_id, $_SESSION["usuario_id"]);

if (isset($data['error'])) {
    header("Location: inicio.php");
    exit;
}

$hijo = $data['hijo'];
$citas = $data['citas'];
?>
<!--Documento-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../components/components.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/pageStyle.css">
    <title>Perfil de <?= htmlspecialchars($hijo['nombre']) ?> - PediVax</title>
</head>
<body>
    <header><?php include(__DIR__ . '/../components/navbar.php'); ?></header>

    <section class="container my-5">
        <h1 class="mb-4">Perfil de <?= htmlspecialchars($hijo['nombre']) ?></h1>
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center gap-4">
                    <img src="../views/img/avatars/<?= htmlspecialchars($hijo['avatar'] ?? 'default-avatar.png') ?>"
                         alt="Avatar de <?= htmlspecialchars($hijo['nombre']) ?>"
                         class="card-avatar" style="width: 100px; height: 100px;">
                    <div>
                        <h3><?= htmlspecialchars($hijo['nombre']) ?></h3>
                        <p>
                            <i class="bi bi-gender-<?= $hijo['sexo'] === 'M' ? 'male' : 'female' ?>" style="color:<?= $hijo['sexo'] === 'M' ? '#339af0' : '#f72585' ?>;"></i>
                            Sexo: <?= $hijo['sexo'] === 'M' ? 'Masculino' : 'Femenino' ?>
                        </p>
                        <p>
                            <i class="bi bi-hourglass-split" style="color:#a259d9;"></i>
                            Edad: 
                            <?php
                            $fechaNac = new DateTime($hijo['fecha_nacimiento']);
                            $hoy = new DateTime();
                            $intervalo = $hoy->diff($fechaNac);
                            $edadMeses = $intervalo->y * 12 + $intervalo->m;

                            if ($intervalo->y < 1) {
                                echo $intervalo->m . ' mes' . ($intervalo->m !== 1 ? 'es' : '');
                            } else {
                                echo $intervalo->y . ' año' . ($intervalo->y !== 1 ? 's' : '');
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-5">Historial de Vacunación</h2>
        <?php if (empty($citas)): ?>
            <p>No hay citas de vacunación registradas.</p>
        <?php else: ?>
            <ul class="list-group">
                <?php foreach ($citas as $cita): ?>
                    <li class="list-group-item">
                        <i class="bi bi-calendar-event" style="color:#a259d9;"></i>
                        <?= (new DateTime($cita['fecha']))->format('d/m/Y') ?> - 
                        <?= htmlspecialchars($cita['tipo_vacuna']) ?> 
                        (<?= htmlspecialchars($cita['centro_medico']) ?>)
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h2 class="mt-5">Recomendaciones de Vacunación</h2>
        <div class="card">
            <div class="card-body">
                <?php
                // Vaccine recommendations based on age (CAV-AEP 2025)
                if ($intervalo->y == 0 && $edadMeses == 0) {
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Hepatitis B</p>';
                } elseif ($edadMeses <= 3) {
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Hexavalente (DTaP-IPV-Hib-HepB)</p>';
                } elseif ($edadMeses <= 10) {
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Hexavalente (DTaP-IPV-Hib-HepB)</p>';
                } elseif ($edadMeses <= 11) {
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Hexavalente (DTaP-IPV-Hib-HepB)</p>';
                } elseif ($edadMeses <= 14) {
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Meningococo ACWY</p>';
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Sarampión, Paperas, Rubéola (MMR)</p>';
                } elseif ($edadMeses <= 23) {
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Varicela</p>';
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Meningococo B (MenB)</p>';
                } elseif ($edadMeses <= 35) {
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Sarampión, Paperas, Rubéola (MMR)</p>';
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Varicela</p>';
                } elseif ($edadMeses <= 71) {
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Influenza (anual)</p>';
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Rotavirus (si no administrada antes)</p>';
                } elseif ($edadMeses <= 83) {
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna DTaP-IPV</p>';
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Polio (IPV)</p>';
                } elseif ($edadMeses <= 143) {
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Tdap</p>';
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Influenza (anual)</p>';
                } elseif ($edadMeses <= 215) {
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Meningococo ACWY</p>';
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Papiloma Humano (HPV)</p>';
                } else {
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Meningococo B (MenB)</p>';
                    echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Tdap (si no administrada antes)</p>';
                }
                ?>
            </div>
        </div>

        <div class="mt-4">
            <a href="hijoFormulario.php?id=<?= htmlspecialchars($hijo['id']) ?>" class="btn btn-primary">Editar Perfil</a>
            <a href="inicio.php" class="btn btn-secondary">Volver</a>
        </div>
    </section>

    <?php include(__DIR__ . '/../components/footer.php'); ?>
</body>
</html>
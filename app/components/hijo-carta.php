<?php
// El archivo hijo-carta.php asume que $hijo y $proximaCita están definidos
?>

<a href="perfilHijo.php?id=<?= htmlspecialchars($hijo['id']) ?>" class="card-hijo">
  <div class="card-hijo-izq">
    <img src="../views/img/avatars/<?= htmlspecialchars($hijo['avatar'] ?? 'default-avatar.png') ?>"
         alt="Avatar de <?= htmlspecialchars($hijo['nombre']) ?>"
         class="card-avatar">
    <h3><?= htmlspecialchars($hijo['nombre']) ?></h3>
    <?php if ($hijo['sexo'] === 'M'): ?>
      <i class="bi bi-gender-male" style="color:#339af0;"></i>
    <?php else: ?>
      <i class="bi bi-gender-female" style="color:#f72585;"></i>
    <?php endif; ?>
  </div>

  <div class="card-info">
    <p>
      <i class="bi bi-hourglass-split" style="color:#a259d9;"></i>
      Edad: <br>
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

    <?php if (!empty($proximaCita)): ?>
      <p>
        <i class="bi bi-calendar-event" style="color:#a259d9;"></i>
        <?= (new DateTime($proximaCita['fecha']))->format('d/m/Y') ?>
        <?= htmlspecialchars($proximaCita['tipo_vacuna']) ?>
      </p>
    <?php else: ?>
      <p>
        <i class="bi bi-calendar-event" style="color:#adb5bd;"></i>
        No tiene nada previsto!
      </p>
    <?php endif; ?>

    <button class="btn login btn-primary button-card-hijo">Ver</button>
  </div>

  <div class="card-recomendacion">
    <p style="color: #F72585; margin-top: 2rem"><strong>Recomendación:</strong></p>
    <?php
    // Vaccine recommendations based on age (CAV-AEP 2025)
    if ($intervalo->y == 0 && $edadMeses == 0) {
      // Newborn (0 months)
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Hepatitis B</p>';
    } elseif ($edadMeses <= 3) {
      // 1–3 months
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Hexavalente (DTaP-IPV-Hib-HepB)</p>';
    } elseif ($edadMeses <= 10) {
      // 4–10 months
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Hexavalente (DTaP-IPV-Hib-HepB)</p>';
    } elseif ($edadMeses <= 11) {
      // 11 months
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Hexavalente (DTaP-IPV-Hib-HepB)</p>';
    } elseif ($edadMeses <= 14) {
      // 12–14 months
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Meningococo ACWY</p>';
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Sarampión, Paperas, Rubéola (MMR)</p>';
    } elseif ($edadMeses <= 23) {
      // 15–23 months
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Varicela</p>';
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Meningococo B (MenB)</p>';
    } elseif ($edadMeses <= 35) {
      // 2–3 years
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Sarampión, Paperas, Rubéola (MMR)</p>';
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Varicela</p>';
    } elseif ($edadMeses <= 71) {
      // 3–5 years
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Influenza (anual)</p>';
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Rotavirus (si no administrada antes)</p>';
    } elseif ($edadMeses <= 83) {
      // 6 years
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna DTaP-IPV</p>';
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Polio (IPV)</p>';
    } elseif ($edadMeses <= 143) {
      // 7–11 years
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Tdap</p>';
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Influenza (anual)</p>';
    } elseif ($edadMeses <= 215) {
      // 12–17 years
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Meningococo ACWY</p>';
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Papiloma Humano (HPV)</p>';
    } else {
      // 18 years (catch-up)
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Meningococo B (MenB)</p>';
      echo '<p><i class="bi bi-syringe" style="color:#A020F0;"></i> Vacuna Tdap (si no administrada antes)</p>';
    }
    ?>
  </div>
</a>
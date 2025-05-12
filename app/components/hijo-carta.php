<div class="card-hijo">
  <img src="../views/img/avatars/<?= htmlspecialchars($hijo['avatar'] ?? 'default-avatar.png') ?>"
       alt="Avatar de <?= htmlspecialchars($hijo['nombre']) ?>"
       class="card-avatar">

  <div class="card-info">
    <h3><?= htmlspecialchars($hijo['nombre']) ?></h3>

    <p>Edad: 
    <?php
    $fechaNac = new DateTime($hijo['fecha_nacimiento']);
    $hoy = new DateTime();
  $intervalo = $hoy->diff($fechaNac);

    if ($intervalo->y < 1) {
    // Menor de 1 año → mostrar en meses
    echo $intervalo->m . ' mes' . ($intervalo->m !== 1 ? 'es' : '');
    } else {
    // 1 año o más → mostrar en años
    echo $intervalo->y . ' año' . ($intervalo->y !== 1 ? 's' : '');
    }
?>

    </p>

    
    <?php if ($hijo['sexo'] === 'M'): ?>
     <i class="bi bi-gender-male" style="color:#339af0;"></i> Niño
    <?php else: ?>
    <i class="bi bi-gender-female" style="color:#f72585;"></i> Niña
    <?php endif; ?>
    <button>Editar</button> <!-- enlazar a editarHijo.php?id=<?= $hijo['id'] ?> -->
  </div>
</div>

<div class="card-hijo">
  <img src="../views/img/avatars/<?= htmlspecialchars($hijo['avatar'] ?? 'default-avatar.png') ?>"
       alt="Avatar de <?= htmlspecialchars($hijo['nombre']) ?>"
       class="card-avatar">

  <div class="card-info">
    <h3><?= htmlspecialchars($hijo['nombre']) ?></h3>

    <p>Edad: 
      <?php
        // Calcular edad desde la fecha de nacimiento
        $fechaNac = new DateTime($hijo['fecha_nacimiento']);
        $hoy = new DateTime();
        $edad = $hoy->diff($fechaNac)->y;
        echo $edad;
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

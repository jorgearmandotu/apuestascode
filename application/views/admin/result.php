<?php
foreach ($asesores->result() as $asesor) {?>
    <ul>
        <li><?= $asesor->nombre; ?>
    </ul>
<?php }
?>
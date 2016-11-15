<?php
if($asesores){
    foreach ($asesores->result() as $asesor) {?>
    <ul>
        <li><a href=" <?= $asesor->cc; ?>" > <?= $asesor->nombre; ?></a></li>
    </ul>
<?php }
}else{
    echo '<p>Registro no encontrado</p>';
}
?>
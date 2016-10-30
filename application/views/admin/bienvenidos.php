    <h1>Bienvenidos</h1>
    <?= getNombre(); 
echo $mimenu;

echo form_open("asesoresing/recibirDatos");

$nombre = array('name' => 'nombre',
              'placeholder' => 'escribe nombre');
$email = array('name'=> 'email',
              'placeholder' => 'email@correo',
              'type' => 'email');

echo form_label('Nombre: ', 'nombre');
echo form_input($nombre);
?>

<?= form_label('Email: ', 'email'); ?>
<?= form_input($email); ?>
<hr>
<?= form_submit('', 'enviar'); ?>
<?= form_close(); ?>
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?= form_open("/a02bases/recibirDatos") ?>
<?php
$nombre=array(
    'id'=>'nombre',
    'name'=>'nombre',
    'placeholder'=>'Escribe tu nombre'
);
?>
    Nombre:
    <?= form_input($nombre) ?> 
    <br> 
    <?= form_submit('Nombre_control_no importa_en_este_caso','Enviar') ?>
    <?= form_close()?>
    <br>
    <br>
    <br>

<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
	<div id="container">
		<?= funcionModelo();?> 
		Hola Mundo!
		<?=$string;?>
		<?php /** la variable $dato[string] se convierte en $string 
		 * <?= equivale a <?php echo pero tiene que ir todo juntito
		 * probar otras ordenes cómo funcionan-> no funciona
		*/?>
		<br>
		<?=$mi_menu;?>
	</div>
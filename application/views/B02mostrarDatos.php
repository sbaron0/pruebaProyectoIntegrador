Nombres <br>
<ul>
<?php
foreach($nombres->result() as $nombre ){ //$nombres viene del controlador Bases de la función index
    echo "<li>" . $nombre->nombre . "</li>";
}
?>
</ul>

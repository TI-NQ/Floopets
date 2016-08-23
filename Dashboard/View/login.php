<?php 
session_start() 
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form action="../Controller/validarusuario.controller.php" method="POST">
	<h1>Ingresar</h1>
	<input placeholder="correo" name="usu_email"></input>
	<br>
	<input placeholder="clave" name="usu_clave"></input>
	<button>Ingresar</button>
</form>

<script type="text/javascript">
	
        <?php

      if(isset($_GET["m"])){
        echo "alert( '".$_GET["m"]."');";
      }
    ?>

</script>


  <div class="row ">
    <form class="col s12  " method="POST" action="enviar.php">
      <div class="row ">

  <input class="form-control" type="hidden" name="usu_email" required value="<?php echo $us[5]?>">

        <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
          <input name="nombre" type="text" class="validate" required>
          <label >Nombre</label>
        </div>

        <div class="input-field col s12">
         <i class="material-icons prefix">call</i>
          <input name="email" type="email" class="validate" required>
          <label >Correo Electrónico de la empresa</label>
        </div>

        <div class="input-field col s12">
         <i class="material-icons prefix">mode_edit</i>
          <input name="asunto" type="text" class="validate">
          <label >Asunto</label>
        </div>

        <div class="input-field col s12">
         <i class="material-icons prefix">mode_edit</i>
          <textarea name="mensaje" class="materialize-textarea"></textarea>
          <label >Mensaje</label>
        </div>


      <center><button type="submit" class="waves-effect waves-light btn">Enviar</button>
      <a href="solicitudes_fundacion.php" class="waves-effect waves-light btn">Cancelar</a></center>


    </form>
  </div>
</div>

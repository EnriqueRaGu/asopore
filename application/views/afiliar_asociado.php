<!--FORMULARIO CREAR USUARIO-->

<div class="contenido_afiliar">
    <div id="divimg">
      <img class="imgasoporeform" src="<?=base_url()?>img/asopore1.png">
      <p id="aso">ASOCIACIÓN DE POLICIAS RETIRADOS DEL NORTE DE SANTANDER</p>
      <p id="aso1">AFILIACIÓN ASOPORE</p>  
    </div>

    <form method="POST" action="<?php echo site_url('/crear/insertarDatos/');?>">
          <input type="text" placeholder="Nombres" name="nombres">
          <input type="text" placeholder="Apellidos" name="apellidos"><br>
          <input type="number" placeholder="Cedula" name="cedula">
          <input type="text" placeholder="Lugar de expedicion" name="lugarexp">
          <input type="text" placeholder="Fecha expedicion" name="fechaexp">          
        
          <input type="text" placeholder="Correo" name="correo">
          <select name="tipo">
          <option>-----------</option>
          <option>CASUR</option>
          <option>TEGEN</option>
          </select><br>
          <input type="text" placeholder="Celular" name="celular">
          <input type="text" placeholder="Telefono" name="telefono">
          <input type="text" placeholder="Direccion" name="direccion">
          
          <input type="text" placeholder="Estado Civil" name="estadocivil">
          <input type="text" placeholder="Fecha de Nacimiento" name="nacimiento"><br>

      <input type="submit" value="Guardar" class="guardar">
    </form>
  
</div>
</body>
</html>
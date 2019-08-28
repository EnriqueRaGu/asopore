  <div class="contenido_creditos">

  	<h4>Creditos</h4>
  	<form method="POST" action="<?php echo site_url('/descargas/solicitar_credito/');?>">
         <input type="number" placeholder="Cedula" name="cedula" id="input-cedula" value="<?=$id?>"><br>
        <input type="text" name="apellidos" value="<?=$apellidos?>">
        <input type="text" name="nombres" value="<?=$nombres?>"><br>
           <input type="number" placeholder="Monto..." name="monto"><br>
           <input type="number" placeholder="Cuantas cuotas..." name="cuotas"><br>
      <input type="submit" value="Imprimir" class="guardar">
    </form>
  
  </div>
	
</body>
</html>
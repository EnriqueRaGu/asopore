  <div class="contenido_benform">

  	<h4>Beneficios</h4>
  	<form method="POST" action="<?php echo site_url('/descargas/solicitar_beneficio/');?>">
        <input type="number" placeholder="Cedula" name="cedula" id="input-cedula" value="<?=$id?>"><br>
        <input type="text" name="apellidos" value="<?=$apellidos?>">
        <input type="text" name="nombres" value="<?=$nombres?>"><br>
      <select name="beneficio">
			<option>-----------</option>
			<option>Silla de ruedas</option>
			<option>Muletas</option>
			<option>Caminadores</option>
			<option>Bastones</option>
			<option>Baston ingles estandar</option>
		</select>
		<br>
		<br>
        <input type="submit" value="Solicitar beneficio" class="guardar">
    </form>

  </div>
	
</body>
</html>
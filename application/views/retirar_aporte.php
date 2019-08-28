  <div id="menu-left">
  	<h3>Menu Aportes</h3>

    <ul class="ul-izquierdo">
      <li class="lu-izquierdo"><a class="a-izquierdo" href="<?=base_url()?>index.php/cartera">Reportes</a></li>
      <li class="lu-izquierdo"><a class="a-izquierdo" href="<?=base_url()?>index.php/cartera/ir_reporte">Crear reporte</a></li>
    </ul>
  </div>

  <div class="contenido_crearreporte">

  	<h4>Retirar Aporte</h4>
  	<form method="POST" action="<?php echo site_url('/descargas/retirar_aporte/');?>">
        <p id="plabel">Cedula </p><input type="number" placeholder="Cedula" name="cedula" id="input-cedula" value="<?=$id?>">
        <p id="plabel">Apellidos </p><input type="text" name="apellidos" value="<?=$apellidos?>">
        <p id="plabel">Nombres </p><input type="text" name="nombres" value="<?=$nombres?>">
        <p id="plabel">Aportes </p><input type="text" name="aportes" value="<?=$aportes?>">
        <p id="plabel">Saldo </p><input type="text" name="saldo" value="<?=$saldo?>">
        <p id="plabel">Retiro </p><input type="number" placeholder="Cuanto desea retirar.." name="retiro">
        <input type="submit" value="Retirar aporte" class="guardarr">
    </form>

  </div>
	
</body>
</html>
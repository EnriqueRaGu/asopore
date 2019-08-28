  <div id="menu-left">
  	<h3>Menu Aportes</h3>

    <ul class="ul-izquierdo">
      <li class="lu-izquierdo"><a class="a-izquierdo" href="<?=base_url()?>index.php/cartera">Reportes</a></li>
      <li class="lu-izquierdo"><a class="a-izquierdo" href="<?=base_url()?>index.php/cartera/ir_reporte">Crear reporte</a></li>
    </ul>
  </div>

  <div class="contenido_crearreporte">

  	<h4>Crear Aporte</h4>
  	<form method="POST" action="<?php echo site_url('/cartera/crear_reporte/');?>">
          <input type="number" placeholder="Cedula" name="cedula"><br>
          <input type="number" placeholder="Base" name="base"><br>
          <input type="number" placeholder="Descuento" name="descuento"><br>
          <input type="number" placeholder="Meses" name="meses"><br>
          
      <input type="submit" value="Guardar" class="guardar">
    </form>

  
  </div>
	
</body>
</html>
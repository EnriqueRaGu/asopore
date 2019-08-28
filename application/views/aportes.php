  <div id="menu-left">
  	<h3>Menu Aportes</h3>

    <ul class="ul-izquierdo">
      <li class="lu-izquierdo"><a class="a-izquierdo" href="<?=base_url()?>index.php/cartera/ir_reporte">Crear reporte</a></li>
    </ul>
  </div>

  <div class="contenido_aportes">
  

  <br>
  <h5>Aportes Registrados</h5>
	<div class="row">
	 <table class="table">
      <thead class="tb-titulos">
        <tr>
            <th class="border-0 pr">Base</th>
            <th class="border-0">Descuento</th>
            <th class="border-0">Meses</th>
            <th class="border-0">Cedula</th>
            <th class="border-0">Nombre</th>
            <th class="border-0">Aportes</th> 
            <th class="border-0">Saldo</th>
            <th class="border-0 ul">Acciones</th>    
        </tr>
      </thead>

      <tbody>
      <?php foreach ($con->result() as $fila) {	?>
          <tr>
            <td><?= $fila->base ?></td>
            <td><?= $fila->basecondes ?></td>
            <td><?= $fila->meses ?></td>
            <td><?= $fila->cedula ?></td>
            <td><?= $fila->apellidos ?> <?= $fila->nombres ?></td>
            <td><?= $fila->aportes ?></td>
            <td><?= $fila->saldo ?></td>
            <td><a href="<?=base_url()?>index.php/cartera/retirar_aporte/<?= $fila->cedula ?>">Egreso</a></td>
          </tr> 
          <?php } ?>
   	         
      </tbody>
    </table>
  </div>

</div>
	
</body>
</html>
 <div style="margin-top: 110px; margin-left: 250px; margin-bottom: 25px;">
    <h2>Beneficios</h2>
  </div>

  <form method="GET" action="<?=base_url()?>index.php/cartera/buscarusuario_beneficio">
      <input type="text" name="query" placeholder="Buscar..." id="buscar">
      <input type="submit" value="buscar" id="botonbuscar">
  </form>

   <form method="GET" action="<?=base_url()?>index.php/cartera/ir_beneficios">
       <input type="submit" value="Todos los usuarios" id="botonbuscar">
  </form>

 
<div class="row">
   <table class="table">
      <thead class="tb-titulos">
        <tr>
            <th class="border-0 pr">Cedula</th>
            <th class="border-0">Apellidos</th>
            <th class="border-0">Nombres</th>
            <th class="border-0">Direccion</th> 
            <th class="border-0">Telefono</th>
            <th class="border-0">Celular</th>  
            <th class="border-0">Correo</th>  
            <th class="border-0 ul">Acciones</th>                    
        </tr>
      </thead>

      <tbody>
       <?php

    if (isset($result)) {
      foreach ($result->result() as $row) { 
  ?>
          <tr>
            <td><?= $row->cedula ?></td>
            <td><?= $row->apellidos ?></td>
            <td><?= $row->nombres ?></td>
            <td><?= $row->direccion ?></td>
            <td><?= $row->telefono ?></td>
            <td><?= $row->celular ?></td>
            <td><?= $row->correo ?></td>
            <td><a href="<?=base_url()?>index.php/cartera/beneficio/<?= $row->cedula ?>">Beneficio</a></td>
          </tr> 
          <?php }
        } ?>           
      </tbody>
    </table>
  </div>
	
</body>
</html>
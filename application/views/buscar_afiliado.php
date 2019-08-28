<!--BUSCAR AFILIADO-->
<div class="busqueda" style="margin-top: 8rem;">
	<h5>Formulario de busqueda</h5>
  <form method="GET" action="<?=base_url()?>index.php/buscarusuario/buscar">
      <input type="text" name="query" placeholder="Buscar..." id="buscar">
      <input type="submit" value="buscar" id="botonbuscar">
  </form>

 
<div class="row">
   <table class="table">
      <thead class="tb-titulos">
        <tr>
            <th class="border-0 pr">Cedula</th>
            <th class="border-0">Apellidos</th>
            <th class="border-0">Nombres</th>
            <th class="border-0">Fecha de nacimiento</th>
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
            <td><?= $row->nacimiento ?></td>
            <td><?= $row->direccion ?></td>
            <td><?= $row->telefono ?></td>
            <td><?= $row->celular ?></td>
            <td><?= $row->correo ?></td>
            <td><a onclick="return confirmar()" href="<?=base_url()?>index.php/consultar/eliminar/<?= $row->cedula ?>">Eliminar</a> 
                <a href="<?=base_url()?>index.php/consultar/editar/<?= $row->cedula ?>">Editar</a></td>
          </tr> 
          <?php }
        } ?>           
      </tbody>
    </table>
  </div>
  	</div>
</body>
</html>
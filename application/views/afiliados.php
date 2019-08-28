  <!-- tabla usuarios -->
<div class="contenido_afiliados">
  
  <br>
  <h4 id="aso_regi"><b>Asociados Registrados</b></h4>
	<div class="row">
	 <table class="table">
      <thead class="tb-titulos">
        <tr>
            <th class="border-0 pr">Cedula</th>
            <th class="border-0">Apellidos</th>
            <th class="border-0">Nombres</th>
            <th class="border-0">Fecha de nacimiento</th>
            <th class="border-0">Tipo asociado</th>
            <th class="border-0">Direccion</th> 
            <th class="border-0">Telefono</th>
            <th class="border-0">Celular</th>  
            <th class="border-0">Correo</th>  
            <th class="border-0 ul">Acciones</th>                    
        </tr>
      </thead>

      <tbody>
      <?php foreach ($con->result() as $fila) {	?>
          <tr>
            <td id="td"><?= $fila->cedula ?></td>
            <td id="td"><?= $fila->apellidos ?></td>
            <td id="td"><?= $fila->nombres ?></td>
            <td id="td"><?= $fila->nacimiento ?></td>
            <td id="td"><?= $fila->tipo_asociado ?></td>
            <td id="td"><?= $fila->direccion ?></td>
            <td id="td"><?= $fila->telefono ?></td>
            <td id="td"><?= $fila->celular ?></td>
            <td id="td"><?= $fila->correo ?></td>
            <td id="td">
              <a onclick="return confirmar()" href="<?=base_url()?>index.php/consultar/eliminar/<?= $fila->cedula ?>">Eliminar</a><a href="<?=base_url()?>index.php/consultar/editar/<?= $fila->cedula ?>">Editar</a>
            </td>
          </tr> 
          <?php } ?>	         
      </tbody>
    </table>
  </div>

</div>  
    
</body>
</html>
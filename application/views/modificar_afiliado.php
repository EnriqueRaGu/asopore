  <!--FORMULARIO MODIFICAR USUARIO-->

<div class="contenido_modificar">
    <div id="divimg" >
      
      <p id="aso">ASOCIACIÓN DE POLICIAS RETIRADOS DEL NORTE DE SANTANDER</p>
      <p id="aso1">MODIFICAR USUARIO</p>  
    </div>

    <form method="POST" action="<?=base_url()?>index.php/consultar/editarEnlace/<?=$id?>">
        <div class="cedula">
          <input type="number" placeholder="Cedula" name="cedula" id="input-cedula" value="<?=$id?>">
        </div>
        <br>
        <div class="nombre">
          <input type="text" name="lugarexp" value="<?=$lugarexp?>">
          <input type="text" name="fechaexp" value="<?=$fechaexp?>"><br>

          <input type="text" name="apellidos" value="<?=$apellidos?>">
          <input type="text" name="nombres" value="<?=$nombres?>">
          <input type="text" name="direccion" value="<?=$direccion?>"><br>
          <input type="text" name="telefono" value="<?=$telefono?>">
          <input type="text" name="celular" value="<?=$celular?>">
          <input type="text" name="correo" value="<?=$correo?>">
          <input type="text" name="estadocivil" value="<?=$estadocivil?>">
          <input type="text" name="nacimiento" value="<?=$nacimiento?>"><br>
        </div>
        <br>
        <input type="submit" value="Modificar" class="guardar">
    </form>
    
    
</div>
</body>
</html>
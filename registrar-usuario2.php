<form action="registrar.php" method="post" class="contactForm">
    <!--Nombre-->
    <div class="form-group">
        <input type="text" name="nombre" class="form-control" placeholder="Ingresar Nombre" data-rule="minlen:4"/>
        <div class="validation"></div>
    </div>

    <!--Apellido Paterno-->
    <div class="form-group">
        <input type="text" name="ap_paterno" class="form-control" id="ap_paterno" placeholder="Ingresar Apellido Paterno" data-rule="minlen:4"/>
        <div class="validation"></div>
    </div>

    <!--Apellido Materno-->
    <div class="form-group">
        <input type="text" name="ap_materno" class="form-control" id="ap_materno" placeholder="Ingresar Apellido Materno" data-rule="minlen:4"/>
        <div class="validation"></div>
    </div>

    <!--Correo Eletronic-->
    <div class="form-group">
      <input type="email" name="email" class="form-control" id="email" placeholder="Ingresar Correo Electrónico" data-rule="email" data-msg="Por favor ingrese un correo electrónico válido" />
      <div class="validation"></div>
    </div>

    <!--Contraseña-->
    <div class="form-group">
        <input type="password" name="contrasena" class="form-control" id="contrasena" placeholder="Ingresar Contraseña" data-rule="password"/>
        <div class="validation"></div>
    </div>

     <!--Confirmar Contraseña-->
     <div class="form-group">
        <input type="password" name="confirmar_contrasena" class="form-control" id="confirmar-contrasena" placeholder="Repetir Contraseña" data-rule="password"/>
        <div class="validation"></div>
    </div>

    <!--Dirección-->
    <div class="form-group">
        <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Ingresar Dirección" data-rule="minlen:4"/>
        <div class="validation"></div>
    </div>

    <!--Comuna-->
    <div class="form-group">
        <select name="comuna" class="form-control" data-rule="minlen:4">
            <option>Seleccionar Dirección</option>
            <option value="cerrillos">Cerrillos</option>
            <option value="cerro-navia">Cerro Navia</option>
            <option value="conchali">Conchalí</option>
            <option value="estacion-central">Estación Central</option>
            <option value="huechuraba">Huechuraba</option>
            <option value="independencia">Independencia</option>
            <option value="la-cisterna">La Cisterna</option>
            <option value="la-florida">La Florida</option>                                    
            <option value="la-granja">La Granja</option>
            <option value="la-pintana">La Pintana</option>
            <option value="la-reina">La Reina</option>
            <option value="las-condes">Las Condes</option>
            <option value="lo-barnechea">Lo Barnechea</option>
            <option value="lo-espejo">Lo Espejo</option>
            <option value="lo-prado">Lo Prado</option>
            <option value="macul">Macul</option>
            <option value="maipu">Maipú</option>
            <option value="nunoa">Ñuñoa</option>
            <option value="pedro-aguirre-cerda">Pedro Aguirre Cerda</option>
            <option value="penalolen">Peñalolén</option>
            <option value="providencia">Providencia</option>
            <option value="pudahuel">Pudahuel</option>
            <option value="quilicura">Quilicura</option>
            <option value="quinta-normal">Quinta Normal</option>
            <option value="recoleta">Recoleta</option>
            <option value="renca">Renca</option>
            <option value="san-joaquin">San Joaquín</option>
            <option value="san-miguel">San Miguel</option>
            <option value="san-ramon">San Ramón</option>
            <option value="santiago">Santiago</option>
            <option value="vitacura">Vitacura</option>
        </select>
        <div class="validation"></div>
    </div>

    <!--genero-->
    <div class="form-group">
        <input type="radio" name="genero" value="masculino" class="form-control" data-rule="minlen:4" checked> Masculino
        <input type="radio" name="genero" value="femenino" class="form-control" data-rule="minlen:4"> Femenino
        <input type="radio" name="genero" value="otros" class="form-control" data-rule="minlen:4"> Otros  
        <div class="validation"></div>
    </div>

    <!--Telefono-->
    <div class="form-group">
        <input type="phone" name="telefono" class="form-control" id="telefono" placeholder="Ingresar Telefono" data-rule="minlen:4s"/>
        <div class="validation"></div>
    </div>

     <!--RUT-->
     <div class="form-group">
        <input type="text" name="rut" class="form-control" id="rut" placeholder="Ingresar RUT" data-msg="Por favor ingrese un RUT válido" data-rule="minlen:4"/>
        <div class="validation"></div>
    </div>

    <!--TODO FALTA LA FOTO-->


    <!--TODO Arreglar funccion del boton-->
    <div class="text-center"><input type="submit" methor="post" value ="Registar Usuario"></div>
  </form>
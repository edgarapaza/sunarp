<?php require 'views/header.php';?>

<div class="container">
    
    <form action="<?php echo constant('URL')?>nuevo/registrarNuevaAcreditacion" method="post">
    <div class="row">
        
            <div class="col-sm">
                <h1>Datos de la Acreditación</h1>
                <?php 
                    if($this->mensaje != null)
                    {
                        echo $this->mensaje;
                    }
                ?>
                
                <p>
                    <input class="form-control" type="text" value="" name="nomacreditado" id="nomacreditado" required placeholder="Nombre del Acreditado">
                </p>
                <p>
                    <input class="form-control" type="text" value="" name="dniacreditado" id="dniacreditado" required placeholder="DNI Acreditado">
                </p>
                <p>
                    <input class="form-control" type="text" value="" name="direccion" id="direccion" required placeholder="Direccion actual">
                </p>
                <p>
                    <label for="anio">Año</label><br>
                    <select name="anio" class="form-control">
                        <option value="2020">2020</option>    
                        <option value="2019">2019</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        
                    </select>
                    
                </p>

                
                
            </div>

            <div class="col-sm">
                <h3>Datos de la Escritura</h3>
                <p>
                    <label for="tipoescritura">Tipo de Escritura</label><br>
                    <input class="form-control" type="text" value="" name="tipoescritura" id="tipoescritura" placeholder="Compra-venta - Testamento" required>
                </p>
                <p>
                    <input class="form-control" type="number" value="" name="numescritura" id="numescritura" required min="1" max="999999" placeholder="Numero de Escritura">
                </p>
                <p>
                    <label for="fechaescritura">Fecha de la Escritura</label><br>
                    <input class="form-control" type="date" name="fechaescritura" id="fechaescritura" required>
                </p>
                <p>
                    <input class="form-control" type="text" value="" name="otorgante" id="otorgante" placeholder="Otorgante(s)" required>
                </p>
                <p>
                    <input class="form-control" type="text" value="" name="favorecido" id="favorecido" required placeholder="Favorecido(s)">
                </p>
                <p>
                    <input class="form-control" type="text" value="" name="notario" id="notario" required placeholder="Nombre del Notario">
                </p>
                <p>
                    <input class="form-control" type="number" value="" name="protocolo" id="protocolo" required min="1" max="9999" placeholder="Numero de Protocolo">
                </p>
                <p>
                    <input class="form-control" type="text" value="" name="folio" id="folio" required placeholder="Numero de Folio (Utilice Vta para Vuelta)">
                </p>
                
            </div>

            <div class="col-sm">
                <p>
                    <label for="departamento">Departamento</label><br>
                    <select class="form-control" name="departamento" id="departamento">
                        <option value="Puno">Puno</option>
                    </select>
                </p>
                <p>
                    <label for="provincia">Provincia</label><br>
                    <select class="form-control" name="provincia" id="provincia">
                        <option value="Puno">Puno</option>
                    </select>
                </p>
                <p>
                    <label for="distrito">Distrito</label><br>
                    <select class="form-control" name="distrito" id="distrito">
                        <option value="Puno">Puno</option>
                    </select>
                </p>
                <hr>
                <p>
                    <label for="zonal">Zonal</label><br>
                    <select class="form-control" name="zonal" id="zonal">
                        <option value="1">Zona Registral N° XVII Sede Tacna</option>
                        <option value="2">Zona Registral N° XVII Sede Juliaca</option>
                    </select>
                </p>
                <p>
                    <label for="oficina">Oficina</label><br>
                    <select class="form-control" name="oficina" id="oficina">
                        <option value="1">Oficina Registral de Juliaca</option>
                        <option value="2">Oficina Registral de Puno</option>
                    </select>
                </p>

                <hr>

        
                <button class="btn btn-primary btn-large" type="submit">Guardar</button>
            </div>
            
            
        
    </div>
    
    </form>
</div>


<?php require 'views/footer.php';?>
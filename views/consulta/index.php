
<?php require 'views/header.php';?>

<div class="container">
    <div class="row">
        <div class="col-sm">
            
            <h1>Web de consultas</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th rowspan="2">Num</th>
                        <th width="10px">Nombre Acreditado</th>
                        <th>Dni Acreditado</th>
                        <th>Direccion</th>
                        <th>Año</th>
                        <th>Zonal</th>
                        <th>Departamento</th>
                        <th>Provincia</th>
                        <th>Distrito</th>
                        <th>Oficina</th>
                    </tr>
                    
                </thead>

                <tbody>
                    
                    
                
                    <?php 
                        $i = 1;
                        foreach($this->escritura as $row)
                        {
                            $escritura = new escritura();
                            $escritura = $row;
                    ?>
                    <tr>
                        <td rowspan="2"><?php echo $i; 
                        
                        ?></td>

                        <td><?php echo $escritura->nomAcred;?></td>
                        <td><?php echo $escritura->dniAcred;?></td>
                        <td><?php echo $escritura->direccion;?></td>
                        <td><?php echo $escritura->anio;?></td>
                        <td><?php echo $escritura->idzonal;?></td>
                        <td><?php echo $escritura->departamento;?></td>
                        <td><?php echo $escritura->provincia;?></td>
                        <td><?php echo $escritura->distrito;?></td>
                        <td><?php echo $escritura->oficina;?></td>
                    </tr>
                    <tr>
                        <td colspan="8">
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tipo Escritura</th>
                                        <th>Numero Escritura</th>
                                        <th>Fecha Escritura</th>
                                        <th>Otorgante</th>
                                        <th>Favorecido</th>
                                        <th>Protocolo</th>
                                        <th>Folio</th>
                                        <th>Codigo QR</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $escritura->tipoesc;?></td>
                                        <td><?php echo $escritura->numesc;?></td>
                                        <td><?php echo $escritura->fecesc;?></td>
                                        <td><?php echo $escritura->otorgesc;?></td>
                                        <td><?php echo $escritura->favoresc;?></td>
                                        <td><?php echo $escritura->protocolo;?></td>
                                        <td><?php echo $escritura->folio;?></td>
                                        <td>
                                        <img src="<?php echo $escritura->codeqr;?>" alt="Codigo">
                                        </td>
                                        <td>
                                            <a href="../sunarp/views/print/index.php?id=<?php echo $escritura->idacred;?>">Imprimir</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                    </tr>
                </tbody>
                    <?php 
                        $i++;
                        } 
                    ?>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require 'views/footer.php';?>
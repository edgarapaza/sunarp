
<?php require 'views/header.php';?>

<div class="container">
    <div class="row">
        <div class="col-sm">
            
            <h1>Web de consultas</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Dni</th>
                        <th>Direccion</th>
                        <th>Año</th>
                        <th>Num Escritura</th>
                        <th>Zonal</th>
                        <th>Escritura</th>

                    </tr>
                </thead>
                <?php 
                    foreach($this->escritura as $row)
                    {
                        $escritura = new escritura();
                        $escritura = $row;
                ?>
                    <tr>
                        <td><?php echo $escritura->nomAcred;?></td>
                        <td><?php echo $escritura->dniAcred;?></td>
                        <td><?php echo $escritura->direccion;?></td>
                        <td><?php echo $escritura->anio;?></td>
                        <td><?php echo $escritura->numesc;?></td>
                        <td><?php echo $escritura->zonal;?></td>
                        <td>
                        <img src="<?php echo $escritura->codeqr;?>" alt="Codigo">
                        </td>
                    </tr>
                    <?php } ?>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require 'views/footer.php';?>
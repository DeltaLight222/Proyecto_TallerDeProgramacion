
	<div class="container-fluit">
    <div class="row">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h4>mensajeria</h4>
            </div>
        </div>
        <div class="col-sd-12 col-md-12">
            <div class="cuadro-log table-responsive"> 
                <br>
                <table class="table table-condensed ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>nombre y apellido</th>
                            <th>correo</th>
                            <th>telefono</th>
                            <th>mensaje</th>
                            <th>Fecha y hora</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $totca=0;
                     
                        foreach($mensajes->result() as $row){ ?>
                        <?php $totca= $totca+1;?>
                
                        <tr>
                            <td><?php echo $row->id_consulta;  ?></td>
                            <td><?php echo $row->nombreYapellido;  ?></td>
                            <td><?php echo $row->correo;  ?></td>
                            <td><?php echo $row->tel;  ?></td>
                            <td><?php echo $row->mensaje;  ?></td>
                            <td><?php echo $row->fecha_ingreso;  ?></td>
                        </tr>
                        <?php } ?> 
                         <tr>
                         <th>Total mensajes</th>
                         <td></td>
                         <td></td>
                         <td></td>
                        <td><?php echo $totca?></td>
                       <td></td> 
                       <td></td>
                        </tr> 

                    </tbody>
                </table>        
            </div>
        </div>
    </div>        
</div>

</main>
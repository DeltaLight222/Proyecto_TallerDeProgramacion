
<div class="row">

<div class="col-md-4 col-md-offset-2">
<div class="cuadro-img fuente-justi3 fondo-con" style="text-align: center;">
<p style="color: white">INFORMACION DE CONTACTO</p>
<?php echo form_open("validar", ['class' => 'form-signin', 'id'=>'form-register','method'=>'post','rule'=>'form']); ?>

          <div class="form-group">
                    <?php echo form_error('nombre'); ?>
                    <?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control','placeholder' => 'ingrese nombre y apellido', 'autofocus'=>'autofocus','required' => 'required']); ?>
                </div>
                <div class="form-group">
                    <?php echo form_error('correo'); ?>
                    <?php echo form_input(['name' => 'correo', 'id' => 'correo', 'class' => 'form-control','type'=>'email','placeholder' => 'ingrese correo','required' => 'required']); ?>
                </div>
                <div class="form-group">
                        <?php echo form_error('telefono'); ?>
                        <?php echo form_input(['name' => 'telefono', 'id' => 'telefono', 'class' => 'form-control','placeholder' => 'ingrese telefono', 'type'=>'numeric','required' => 'required']); ?>
                </div>
                <div class="form-group">
                    <?php echo form_error('mensaje'); ?>
                    <?php echo form_textarea(['name' => 'mensaje', 'id' => 'mensaje', 'class' => 'form-control','placeholder' => 'ingrese mensaje','required' => 'required']); ?>
                </div>
                <!--form_sumit y id submit_btn se usara para validar-->
                <?php echo form_submit(['type'=>'submit','name'=>'submit','value'=>'Enviar','class'=> "btn btn-lg btn-info btn-block", 'id'=>'submit_btn']); ?>
                
                <br>
    <?php echo form_close(); ?>

</div>
</div>

<div class="row">
	<div class="col-sm-5 esp-bajo">
	  <div class="cuadro-img fuente-justi3 fondo-con" style="color:white;">
		   <div class="text-medio">
		  	Informacion
		  </div><br>
		  <p>
		  <b class="b">Nombre:</b> INMOBILIARIA S&#38;R <br><br>
		  <b class="b">Direccion:</b> Salta 2318, Corrientes, Pcia. de Corrientes.<br><br>
		  <b class="b">Telefono:</b> (+54)03794-784568<br><br>
		  <b class="b">Correo:</b> GestionInmobiliaria@gmail.com</p>

	  	</div>
			
</div>




</main>



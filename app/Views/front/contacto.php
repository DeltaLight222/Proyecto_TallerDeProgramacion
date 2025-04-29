<div class="container p-3 mb-2 text-white border-top border border-secondary rounded fondo2" style="width: 70%;">
    <h2 class="text-center"> CONTACTO</h2>
	<!--<form action="<?php echo base_url();?>/c_sistema/contacto" method="post"  id="form_contact">
	
	<form action="<?= base_url('consultas_controller/registrar_consulta') ?>" method="post" id="form_contact">

			<div class="row">
					<div class="col-md-6 pb-2">
						<div class="form-group">
							<label>Nombre/s y Apellido/s</label>
							<input type="text" value="" autocomplete="off" placeholder="Nombre/s y Apellido/s" maxlength="60" name="nomyape" class="form-control">
						</div>
					</div>
					<div class="col-md-6 pb-2">
							<label>Correo Electrónico</label>
							<input type="text" value="" autocomplete="off" placeholder="Correo Electrónico" maxlength="20" name="telefono" class="form-control">
					</div>
					<div class="col-md-6 pb-2">
							<label>Teléfono (solo números)</label>
							<input type="text" value="" autocomplete="off" placeholder="Telefono" maxlength="150" name="direccion" class="form-control">
					</div>
					<div class="col-md-6 pb-2">
							<label>Motivo</label>
							<input type="text" value="" autocomplete="off" placeholder="Motivo" maxlength="320" name="email" class="form-control">
					</div>
					<div class="container col-md-10 pb-2  ">
							<label>Mensaje</label>
							<textarea rows="5" name="mensaje"  autocomplete="off" placeholder="Mensaje" maxlength="5000" class="form-control"></textarea>
					</div>	

			</div>	
				<br>
					<div class="text-center">
							<button type="submit" id="btn_contact" class="btn btn-success">Enviar</button>
					</div>	
	</form>	



</div>-->

<form action="<?= base_url('consultas_controller/registrar_consulta') ?>" method="post" id="form_contact">
    <div class="row">
        <div class="col-md-6 pb-2">
            <div class="form-group">
                <label>Nombre/s y Apellido/s</label>
                <input type="text" value="" autocomplete="off" placeholder="Nombre/s y Apellido/s" maxlength="60" name="nombre_apellido" class="form-control">
            </div>
        </div>
        <div class="col-md-6 pb-2">
            <label>Correo Electrónico</label>
            <input type="text" value="" autocomplete="off" placeholder="Correo Electrónico" maxlength="20" name="email" class="form-control">
        </div>
        <div class="col-md-6 pb-2">
            <label>Teléfono (solo números)</label>
            <input type="text" value="" autocomplete="off" placeholder="Telefono" maxlength="150" name="telefono" class="form-control">
        </div>
        <div class="col-md-6 pb-2">
            <label>Motivo</label>
            <input type="text" value="" autocomplete="off" placeholder="Motivo" maxlength="320" name="motivo" class="form-control">
        </div>
        <div class="container col-md-10 pb-2  ">
            <label>Mensaje</label>
            <textarea rows="5" name="mensaje" autocomplete="off" placeholder="Mensaje" maxlength="5000" class="form-control"></textarea>
        </div>  
    </div>  
    <br>
    <div class="text-center">
        <button type="submit" id="btn_contact" class="btn btn-success">Enviar</button>
    </div>   
</form>
 </div> 


   
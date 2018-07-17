<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Modifier voiture</h2>
			<div class="box-icon">
			</div>
		</div>
		<div class="box-content">
			<form action="<?php echo base_url()."carstore/modele/update" ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
				<fieldset id="client">
					<div class="control-group">
								<label class="control-label" for="selectError">Marque</label>
								<div class="controls">
								  <select data-rel="chosen" name="marque">
									<option <?php if("Peugeot"==$modele->marque)echo "selected"; ?>>Peugeot</option>
									<option <?php if("Renault"==$modele->marque)echo "selected"; ?>>Renault</option>
									<option <?php if("Volkswagen"==$modele->marque)echo "selected"; ?>>Volkswagen</option>
									<option <?php if("Fiat"==$modele->marque)echo "selected"; ?>>Fiat</option>
								  </select>
								</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="focusedInput">Nom du modéle</label>
						<div class="controls">
							<input class="input-xlarge focused" type="text" name="lib_m" value="<?php echo $modele->lib_m ?>">
						</div>
					</div>

					
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Enregistrer</button>

					</div>
				</fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div>
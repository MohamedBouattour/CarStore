<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Ajouter commande</h2>
			<div class="box-icon">
			</div>
		</div>
		<div class="box-content">
			<form action="<?php echo base_url()."carstore/modele/insert" ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
				<fieldset id="client">
					<div class="control-group">
								<label class="control-label" for="selectError">Client</label>
								<div class="controls">
								
								<select data-rel="chosen" name="id_cl" id="c" onchange="genere()">
								<?php foreach ($clients as $client ) 
								{ 
									echo "<option>";
									echo $client->mail ;
									echo"</option>";
								} ?>
								</select>  
								</div>
					</div>
					<div class="control-group">
								<label class="control-label" for="selectError">Voiture</label>
								<div class="controls">
								
								<select data-rel="chosen" name="id_cl" id="v">
								<?php foreach ($voitures as $voiture ) 
								{ 
									echo "<option>";
									echo $voiture->id ;
									echo"</option>";
								} ?>
								</select>  
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
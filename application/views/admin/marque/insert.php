<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Ajouter marque</h2>
			<div class="box-icon">
			</div>
		</div>
		<div class="box-content">
			<form action="<?php echo base_url()."carstore/marque/insert" ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
				<fieldset id="client">
					<div class="control-group">
						<label class="control-label" for="focusedInput">Marque</label>
						<div class="controls">
							<input class="input-xlarge focused" type="text" name="lib_marque" required="true">
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
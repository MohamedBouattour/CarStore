<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Ajouter personnel</h2>
			<div class="box-icon">
			</div>
		</div>
		<div class="box-content">
			<form action="<?php echo base_url()."restofast/team/insert" ?>" method="post" class="form-horizontal" method="post" enctype="multipart/form-data">
				<fieldset id="client">
					<div class="control-group">
						<label class="control-label" for="focusedInput">Nom</label>
						<div class="controls">
							<input class="input-xlarge focused" id="focusedInput" type="text" name="name">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="focusedInput">Grade</label>
						<div class="controls">
							<input class="input-xlarge focused" id="focusedInput" type="text" name="rank">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="focusedInput">Spécialité</label>
						<div class="controls">
							<input class="input-xlarge focused" id="focusedInput" type="text" name="field">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Photo</label>
						<div class="controls">
							<input type="file" name="thumbnail">
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
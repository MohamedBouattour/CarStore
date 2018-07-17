<script type="text/javascript">
$(function()
{	
	$("#enregistrer").click(function()
	{
		var valide=true;

		if ($("#marque").val()==0) 
			{
				$("#marque").css("border-color","#FF0000");	
				valide= false;	
			}
		else 
		{
			$("#marque").css("border-color","#00FF00");
		}

		return valide;
		
	});
});
</script>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Ajouter modéle</h2>
			<div class="box-icon">
			</div>
		</div>
		<div class="box-content">
			<form action="<?php echo base_url()."carstore/modele/insert" ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
				<fieldset id="client">
					<div class="control-group">
								<label class="control-label" for="selectError">Marque</label>
								<div class="controls">
								 <select name="marque" id="marque">
								 <option value="0">Choisir une marque</option>
								<?php foreach ($marques as $marque ) 
								{ 
									echo "<option>";
									echo $marque->lib_marque ;
									echo"</option>";
								} ?>
							</select>
								</div>
					</div>

					

					<div class="control-group">
						<label class="control-label" for="focusedInput">Nom du modéle</label>
						<div class="controls">
							<input required="true" class="input-xlarge focused" type="text" name="lib_m">
						</div>
					</div>

					
					<div class="form-actions">
						<button type="submit" class="btn btn-primary" id="enregistrer">Enregistrer</button>

					</div>
				</fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div>
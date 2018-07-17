<script type="text/javascript">
$(function()
{	
	$("#enregistrer").click(function()
	{
		var valide=true;

		if (($("#prix_o").val()<=0) || (isNaN($("#prix_o").val())==true))
			{
				$("#prix_o").css("border-color","#FF0000");	
				valide= false;	
			}
		else 
		{
			$("#prix_o").css("border-color","#00FF00");
		}

		return valide;
	});
});
</script>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Modifier option</h2>
			<div class="box-icon">
			</div>
		</div>
		<div class="box-content">
			<form action="<?php echo base_url()."carstore/opt/update/".$opt->id ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
				<fieldset id="client">
					<div class="control-group">
						<label class="control-label" for="focusedInput">Libelle option</label>
						<div class="controls">
							<input class="input-xlarge focused" type="text" name="lib_o" value="<?php echo $opt->lib_o ?>">
						</div>
					</div>
					<div class="control-group">
								<label class="control-label" for="appendedPrependedInput">Prix option</label>
								<div class="controls">
								  <div class="input-prepend input-append">
									<span class="add-on">TND</span><input id="prix_o" name="prix_o" size="16" type="text" value="<?php echo $opt->prix_o ?>"><span class="add-on">.000</span>
								  </div>
								</div>
					</div>
					<div class="form-actions">
						<button id="enregistrer" type="submit" class="btn btn-primary">Enregistrer</button>
					</div>
				</fieldset>
			</form>   
		</div>
	</div><!--/span-->
</div>
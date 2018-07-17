<script type="text/javascript">
$(function()
{	
	$("#enregistrer").click(function()
	{
		var valide=true;

		if (($("#prix_v").val()<=0) || (isNaN($("#prix_v").val())==true)) 
			{
				$("#prix_v").css("border-color","#FF0000");	
				valide= false;	
			}
		else 
		{
			$("#prix_v").css("border-color","#00FF00");
		}



		if ($("#couleur_v").val()==0) 
			{
				$("#couleur_v").css("border-color","#FF0000");	
				valide= false;	
			}
		else 
		{
			$("#couleur_v").css("border-color","#00FF00");
		}



		if ($("#klm").val()==0) 
		{
			$("#klm").css("border-color","#FF0000");	
			valide= false;	
		}
		else 
		{
			$("#klm").css("border-color","#00FF00");
		}
		

		return valide;
		
	});
});
</script>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Modifier voiture No= <?php echo $voiture->id; ?></h2>
			<div class="box-icon">
			</div>
		</div>
		<div class="box-content">
			<form action="<?php echo base_url()."carstore/voiture/update/".$voiture->id ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
				<fieldset id="client">
					<div class="control-group">
								<label class="control-label" for="selectError">Marque</label>
								<div class="controls">
								  
								<?php  
								echo $voiture->marque_v ;
								 ?>
							
								</div>
					</div>

					<div class="control-group">
								<label class="control-label" for="selectError">Modèle</label>
								<div class="controls">
								  
								<?php 
									

											echo $voiture->model_v ;
									 
								?>

								</div>
					</div>

					<div class="control-group">
								<label class="control-label" for="appendedPrependedInput">Prix</label>
								<div class="controls">
								  <div class="input-prepend input-append">
									<span class="add-on">TND</span>
									<input value="<?php echo $voiture->prix_v ?>" name="prix_v" id="prix_v"  size="16" type="text" required="true">
									<span class="add-on">.000</span>
								  </div>
								</div>
					</div>


					<div class="control-group">
						<label class="control-label" for="focusedInput">Couleur</label>
						<div class="controls">
							<input id="couleur_v" required="true" value="<?php echo $voiture->couleur_v ?>" class="input-xlarge focused" type="text" name="couleur_v">
						</div>
					</div>

					<div class="control-group">
								<label class="control-label" for="selectError3">Type de carburant</label>
								<div class="controls">
								  <select name="type_c">
									<option <?php if($voiture->type_c=="Essence")echo "selected"; ?>>Essence</option>
									<option <?php if($voiture->type_c=="Gazoil")echo "selected"; ?>>Gazoil</option>
									<option <?php if($voiture->type_c=="Gaz")echo "selected"; ?>>Gaz</option>
									<option <?php if($voiture->type_c=="Autre..")echo "selected"; ?>>Autre..</option>
								  </select>
								</div>
					</div>
					<?php if($voiture->klm>0){?>
					<div class="control-group">
						<label class="control-label" for="focusedInput">Kilometrage</label>
						<div class="controls">
							<input required="true" id="klm" class="input-xlarge focused" type="text" name="klm" value="<?php echo $voiture->klm ?>">
						</div>
					</div>
<?php } ?>
<?php if($voiture->klm>0){?>
					<div class="control-group">
								<label class="control-label" for="selectError3">Année de construction</label>
								<div class="controls">
								 <?php echo $voiture->anne_construction; ?> 
								</div>
					</div>
					<?php }else {?>
					<div class="control-group">
						<label class="control-label" for="selectError3">Option</label>
						<div class="controls">
						<select name="option" id="op" >
								<?php foreach ($opts as $opt ) 
								{ 
									echo "<option>";
									echo $opt->lib_o ;
									echo"</option>";
								} ?>
							</select>
						</div>
					</div>
<?php } ?>


					<div class="control-group">
						<label class="control-label">Photo</label>
						<div class="controls">
							<input type="file" name="thumbnail">
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
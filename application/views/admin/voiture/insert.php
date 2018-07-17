<script type="text/javascript">
	$(function()
	{	
		$("#enregistrer").click(function()
		{
			var valide=true;

			if ($("#m").val()==0) 
			{
				$("#m").css("border-color","#FF0000");	
				valide= false;	
			}
			else 
			{
				$("#m").css("border-color","#00FF00");
			}



			if ($("#mmm").val()==0) 
			{
				$("#mmm").css("border-color","#FF0000");	
				valide= false;	
			}
			else 
			{
				$("#mmm").css("border-color","#00FF00");
			}

			if (($("#prix_v").val()<=0) || (isNaN($("#prix_v").val())==true))
			{
				$("#prix_v").css("border-color","#FF0000");	
				valide= false;	
			}
			else 
			{
				$("#prix_v").css("border-color","#00FF00");
			}

			if (($("#klm").val()<=0) || (isNaN($("#klm").val())==true))
			{
				$("#klm").css("border-color","#FF0000");	
				valide= false;	
			}
			else 
			{
				$("#klm").css("border-color","#00FF00");
			}

			if ($("#type_c").val()==0) 
			{
				
				$("#type_c").css("border-color","#FF0000");	
				valide= false;		
			}
			else 
			{
				$("#type_c").css("border-color","#00FF00");	
			}
			if ($("#anne_construction").val()==0) 
			{
				
				$("#anne_construction").css("border-color","#FF0000");	
				valide= false;		
			}
			else 
			{
				$("#anne_construction").css("border-color","#00FF00");	
			}
			return valide;

		});
});



$(document).ready(function()
{
	
	$("#m").change(function()
	{
		var marque=$(this).val();
		var dataString = 'marque='+ marque;
		$.post('<?php echo base_url()."carstore/voiture/getModeleByMarque";?>',{"marque":marque},function(data){
			var opts = JSON.parse(data);
			$("#mmm").html("");
			$("#mmm").append("<option value='0'> Choisir un modéle</option>");
			
			for(opt in opts){
				$("#mmm").append("<option value='"+opts[opt].lib_m+"'>"+opts[opt].lib_m+"</option>");
			}
			
		});
	
	});
	$("#mmm").change(function()
	{
		var x =this.value();
		this.append(x);
	});
});

</script>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i> Ajouter voiture neuf</h2>
			<div class="box-icon">
			</div>
		</div>
		<div class="box-content">
			<form action="<?php echo base_url()."carstore/voiture/insert" ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
				<fieldset id="client">
					<div class="control-group">
						<label class="control-label" for="selectError">Marque </label> 
						<div class="controls">
							<select name="marque_v" id="m" required="true">

								<option value="0">Choisir une marque</option>
								<?php foreach ($marques as $marque ) 
								{ 
									echo "<option value=$marque->lib_marque>";
									echo $marque->lib_marque ;
									echo"</option>";
								} ?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="selectError">Modèle</label>
						<div class="controls" id="mm">
							<select name="model_v" id="mmm" required="true">
								<option value="0">Choisir un modéle</option>
							</select>


						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="appendedPrependedInput">Prix</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<span class="add-on">TND</span>
								<input id="prix_v" name="prix_v" size="16" type="text" required="true">
								<span class="add-on">.000
								</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="focusedInput">Couleur</label>
						<div class="controls">
							<input id="couleur_v" class="input-xlarge focused" type="text" name="couleur_v" required="true">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="selectError3">Type de carburant</label>
						<div class="controls">
							<select name="type_c" id="type_c" required="true">
								<option value='0'>Choisir un carburant</option>
								<option>Essence</option>
								<option>Gazoil</option>
								<option>Gaz</option>
								<option>Autre..</option>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="focusedInput">Kilometrage</label>
						<div class="controls">
							<input class="input-xlarge focused" type="text" name="klm" id="klm" required="true">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="selectError3">Année de construction</label>
						<div class="controls">
							<select name="anne_construction" id="anne_construction">
								<option value="0">Choisir une anneé</option>
								<?php for($i=date("Y");$i>=1995;$i--){ ?>
								<option><?php echo $i; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="focusedInput">Description</label>
						<div class="controls">
							<textarea rows="4"  name="description" id="description">
								
							</textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Photo</label>
						<div class="controls">
							<input type="file" name="images_v">
						</div>
					</div>
					<div class="form-actions">
						<button id="enregistrer" type="submit" class="btn btn-primary">Enregistrer</button>
					</div>
				</fieldset>
			</form>   
		</div>
	</div>
</div>

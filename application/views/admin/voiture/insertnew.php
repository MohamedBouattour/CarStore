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

		if ($("#type_c").val()==0) 
			{
				
				$("#type_c").css("border-color","#FF0000");	
				valide= false;		
			}
		else 
		{
			$("#type_c").css("border-color","#00FF00");	
		}
		if ($("#option").val()==0) 
			{
				
				$("#option").css("border-color","#FF0000");	
				valide= false;		
			}
		else 
		{
			$("#option").css("border-color","#00FF00");	
		}
		return valide;
		
	});
});



$(document).ready(function()
{
	function remp(data)
	{
		$("#mm").find("#mmm").find('option').remove().end();
		var marques = JSON.parse(data);

		var op= "<option value='0' >"+'choisir un modéle'+"</option>";
		$("#mm").find("#mmm").append(op);

		for (var i =0 ;i< marques.length  ; i++) 
		{
			op = "<option>"+marques[i]['lib_m']+"</option>";
			$("#mm").find("#mmm").append(op);
		};
		//var op = "<option value='"+marques[0]['id']+"'>"+marques[0]['lib_m']+"</option>";
		//$("#mm").find("#mmm").find('option').remove().end();
		//$("#mm").find("#mmm").append(op);
	}
	$("#m").change(function()
	{
		var marque=$(this).val();
		var dataString = 'marque='+ marque;
		$.ajax
		({
			type: "POST",
			url: '<?php echo base_url()."carstore/voiture/getModeleByMarque";?>',
			data: dataString,
			cache: false,
			success: function(data)
			{
				remp(data);
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
			<form action="<?php echo base_url()."carstore/voiture/insertnew" ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
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
							<select  name="model_v" id="mmm" required="true">
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
								<option value='0'>Choisir un carburant</option>>
								<option>Essence</option>
								<option>Gazoil</option>
								<option>Gaz</option>
								<option>Autre..</option>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="selectError3">Option</label>
						<div class="controls">
						<select name="option" id="option" required="true">
						<option value="0">Choisir une option</option>>
								<?php foreach ($opts as $opt ) 
								{ 
									echo "<option>";
									echo $opt->lib_o ;
									echo"</option>";
								} ?>
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

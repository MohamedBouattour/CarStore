<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-list"></i> Voitures</h2>
			<div class="box-icon">
				<button onclick="window.location.href='<?php echo base_url().'carstore/voiture/add/'; ?>'" id="sample_editable_1_new" class="btn btn-warning">
					Ajouter occasion<i class="icon-plus"></i>
				</button>
				<button onclick="window.location.href='<?php echo base_url().'carstore/voiture/addNew/'; ?>'" id="sample_editable_1_new" class="btn btn-warning">
					Ajouter nouveau<i class="icon-plus"></i>
				</button>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th>Réference</th>
						<th>Marque</th>
						<th>Modèle</th>
						<th>Prix</th>
						<th>Couleur</th>
						<th>Type carburant</th>
						<th>Date mise en vente</th>
						<th>Options</th>
						<th>Kilometrage</th>
						<th>Année de construction</th>
						<th>Images</th>
						<th>Action</th> 
					</tr>
				</thead>
				<tbody>
					<?php foreach($voitures as $voiture){?>
					<tr>
						<td><?php echo $voiture->id;?></td>
						<td><?php echo $voiture->marque_v;?></td>
						<td><?php echo $voiture->model_v;?></td>
						<td><?php echo $voiture->prix_v;?></td>
						<td><?php echo $voiture->couleur_v;?></td>
						<td><?php echo $voiture->type_c;?></td>
						<td><?php echo $voiture->dat_mise_vente;?></td>
						<td><?php echo $voiture->option;?></td>
						<td><?php echo $voiture->klm;?></td>
						<td><?php echo $voiture->anne_construction;?></td>
						<td><img width="100" height="100" src="<?php echo base_url()."upload/".$voiture->images_v; ?>"></td>

						<td><div class="btn-group pull-right" >
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-wrench"></i><span class="hidden-phone"> Parametres</span>
								<span class="caret"></span>
							</a>

							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url()."carstore/voiture/edit/".$voiture->id; ?>">
									<i class="icon-pencil"></i>  
									Modifier                                            
								</a></li>
								<li><a href="<?php echo base_url()."carstore/voiture/delete/".$voiture->id; ?>">
									<i class="icon-trash"></i> 
									Supprimer
								</a></li>								
							</ul>
							</div>
						</td>
				</tr>
				<?php } ?> 
			</tbody> 
		</table>
		</div>
		</div>
		</div>
	</div>
</div>
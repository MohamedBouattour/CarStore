<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-list"></i> L'équipe</h2>
			<div class="box-icon">
				<button onclick="window.location.href='<?php echo base_url().'restofast/team/add/'; ?>'" id="sample_editable_1_new" class="btn btn-warning">
					Ajouter <i class="icon-plus"></i>
				</button>
			</div>
		</div>

		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th>Nom</th>
						<th>Grade</th>
						<th>Spécialité</th>
						<th>photo</th>
						<th>Action</th> 
					</tr>
				</thead>
				<tbody>
					<?php foreach($teams as $team){?>
					<tr>
						<td><?php echo $team->name;?></td>
						<td><?php echo $team->rank;?></td>
						<td><?php echo $team->field;?></td>
						<td><img width="100" height="100" src="<?php echo base_url()."upload/".$team->thumbnail; ?>"></td>

						<td><div class="btn-group pull-right" >
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-wrench"></i><span class="hidden-phone"> Parametres</span>
								<span class="caret"></span>
							</a>

							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url()."restofast/team/edit/".$team->id; ?>">
									<i class="icon-pencil"></i>  
									Modifier                                            
								</a></li>
								<li><a href="<?php echo base_url()."restofast/team/delete/".$team->id; ?>">
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
</div><!--/span-->
</div>
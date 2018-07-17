<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-list"></i> Modéles </h2>
			<div class="box-icon">
				<button onclick="window.location.href='<?php echo base_url().'carstore/modele/add/'; ?>'" id="sample_editable_1_new" class="btn btn-warning">
					Ajouter <i class="icon-plus"></i>
				</button>
			</div>
		</div>

		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th>Marque</th>
						<th>Nom du modéle</th>
						<th>Action</th> 
					</tr>
				</thead>
				<tbody>
				
					<?php foreach($modeles as $modele){?>
					<tr>
						<td><?php echo $modele->marque;?></td>
						<td><?php echo $modele->lib_m;?></td>
						<td><div class="btn-group pull-right" >
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-wrench"></i><span class="hidden-phone"> Parametres</span>
								<span class="caret"></span>
							</a>

							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url()."carstore/modele/edit/".$modele->id; ?>">
									<i class="icon-pencil"></i>  
									Modifier                                            
								</a></li>
								<li><a href="<?php echo base_url()."carstore/modele/delete/".$modele->id; ?>">
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
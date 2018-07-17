<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-list"></i> Options </h2>
			<div class="box-icon">
				<button onclick="window.location.href='<?php echo base_url().'carstore/opt/add/'; ?>'" id="sample_editable_1_new" class="btn btn-warning">
					Ajouter <i class="icon-plus"></i>
				</button>
			</div>
		</div>

		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th>Libelle option</th>
						<th>Prix option</th>
						<th>Action</th> 
					</tr>
				</thead>
				<tbody>
				
					<?php foreach($opts as $opt){?>
					<tr>
						<td><?php echo $opt->lib_o;?></td>
						<td><?php echo $opt->prix_o;?></td>
						<td><div class="btn-group pull-right" >
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-wrench"></i><span class="hidden-phone"> Parametres</span>
								<span class="caret"></span>
							</a>

							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url()."carstore/opt/edit/".$opt->id; ?>">
									<i class="icon-pencil"></i>  
									Modifier                                            
								</a></li>
								<li><a href="<?php echo base_url()."carstore/opt/delete/".$opt->id; ?>">
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
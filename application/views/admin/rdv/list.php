<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-list"></i> Les Rendez-Vous</h2>
		</div>

		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th>Client</th>
						<th>Reférence voiture</th>
						<th>Marque</th>
						<th>Modele</th>
						<th>Date et heure</th> 
					</tr>
				</thead>
				<tbody>
					<?php foreach($rdvs as $rdv){?>
					<tr>
						<td><?php echo $rdv->nom_cl;?><?php echo " ".$rdv->pren_cl;?></td>
						<td><?php echo $rdv->id;?></td>
						<td><?php echo $rdv->marque_v;?></td>
						<td><?php echo $rdv->model_v;?></td>
						<td><?php echo $rdv->date_et_heure;?></td>
				</tr>
				<?php } ?> 
			</tbody> 
		</table>
	</div>
</div><!--/span-->
</div>
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-list"></i> Clients</h2>
			<div class="box-icon">		
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th>reference</th>
						<th>prenom</th>
						<th>nom</th>
						<th>mail</th>
						<th>telephone</th> 
					</tr>
				</thead>
				<tbody>
					<?php foreach($clients as $client){?>
					<tr>
						<td><?php echo $client->id;?></td>
						<td><?php echo $client->nom_cl;?></td>
						<td><?php echo $client->pren_cl;?></td>
						<td><?php echo $client->mail;?></td>
						<td><?php echo $client->tel;?></td>	
				</tr>
				<?php } ?> 
			</tbody> 
		</table>
	</div>
</div><!--/span-->
</div>
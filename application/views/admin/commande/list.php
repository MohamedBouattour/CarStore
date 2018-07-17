<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-list"></i> Commande </h2>
			<div class="box-icon">
				
			</div>
		</div>

		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th>Numero commande</th>
						<th>Client</th>
						<th colspan="2">Voitures</th>
						<th>Montant total</th> 
					</tr>
				</thead>
				<tbody>
				
					<?php foreach($commandes as $commande){?>
					<tr>
						<td><?php echo $commande->id;?></td>
						<td><?php echo $commande->nom_cl;?><?php echo $commande->pren_cl;?></td>
						<td>
					<?php foreach($lignes as $ligne){?>
						<?php if($commande->id==$ligne->id_cmd) echo "ref: ".$ligne->id_v;?><br>
						
					<?php } ?> 	
					</td>
					<td>
					<?php foreach($lignes as $ligne){?>
						<?php if($commande->id==$ligne->id_cmd) echo "prix: ".$ligne->mnt;?><br>
						
					<?php } ?> 	
					</td>
					<td><?php echo $commande->tot;?></</td>
					</tr>
				<?php } ?> 
			</tbody> 
		</table>
	</div>
</div><!--/span-->
</div>
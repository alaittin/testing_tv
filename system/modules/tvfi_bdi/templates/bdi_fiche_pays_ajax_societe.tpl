<div class="ajaxPagination"><?php echo $this->societesPagination; ?></div>
								
<div class="clear"></div>
								
							
<table class="tableau" id="liste_societes" summary="Liste des sociétés">
	<thead>
		<tr>
			<th class="col_societe width_428"><a href="#"><span>Nom</span></a></th>
			<th class="col_statut width_177"><a href="#"><span>Statut</span></a></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($this->societes as $societe): ?>
		<tr>
			<td class="col_societe"><?php echo $societe->localizedLink; ?></td>
			<td class="col_statut"><?php echo $societe->typeNamesAsString; ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

                 	<div class="inside">
					<div class="nav_table">
						<?php echo $this->alphamenu; ?>

    					<?php echo $this->pagination; ?>

						<div class="clear"></div>
									
					</div><!-- fin nav_table -->
					
					
					
					<?php if(count($this->contacts >0)) : ?>
					
						<table class="tableau" id="liste_contacts" summary="Liste des contacts">
							<thead>
							<tr>
								<th width="85"><a href="#"><span>Civilité</span></a></th>
								<th width="151"><a href="#"><span>Nom</span></a></th>
								<th width="111"><a href="#"><span>Email</span></a></th>
								<th width="281"><a href="#"><span>Société</span></a></th>
								<th width="170"><a href="#"><span>Fonction</span></a></th>
								<th width="158"><a href="#"><span>Pays</span></a></th>
							</tr>
							</thead>
							<tbody>
							<?php foreach($this->contacts as $contact): ?>
							<tr>
								<td class="col_civilite"><?php echo $contact->ctc_titre; ?></td>
								<td class="col_nom"><?php echo $contact->fullNameLink; ?></td>
								<td class="col_email"><a href="#" title="Envoyer un mail à ..."><img src="tl_files/icones/picto_mail_table_contacts.png" alt="Envoyer un mail" /></a></td>
								<td class="col_nom_societe"><?php echo $contact->lastPosteSocieteAcheteuse->DepartementSocieteAcheteuse()->SocieteAcheteuse()->localizedLink; ?></td>
								<td class="col_fonction"><?php echo $contact->lastPosteSocieteAcheteuse->pst_fonction; ?></td>
								<td class="col_pays last"><?php echo $contact->lastPosteSocieteAcheteuse->DepartementSocieteAcheteuse()->SocieteAcheteuse()->Pays()->localizedLink; ?></td>
							</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					
					<?php endif; ?>					
					
					<div class="clear"></div>
					
					<div class="nav_table">

    					<?php echo $this->pagination; ?>
									
					</div><!-- fin nav_table -->
					
					<div class="clear"></div>
					
					</div><!-- fin inside -->
					
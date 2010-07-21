                 	<div class="inside">
					<div class="nav_table">
						<?php echo $this->alphamenu; ?>

    					<?php echo $this->pagination; ?>

						<div class="clear"></div>
									
					</div><!-- fin nav_table -->
					
					
					
					<?php if(count($this->societes >0)) : ?>
					
						<table class="tableau" id="liste_societes" summary="Liste des sociétés">
							<thead>
								<tr>
									<th><a href="<?php echo $this->jumpTo . $societe->alias .$GLOBALS['TL_CONFIG']['urlSuffix']; ?>"><span>Société</span></a></th>
									<th><a href="#"><span>Pays</span></a></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($this->societes as $societe): ?>
									<tr class="">
										<td class="col_societe"><strong><?php echo $societe->localizedLink; ?></strong></td>
										<td class="col_pays"><?php echo $societe->Pays()->localizedLink; ?></td>
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

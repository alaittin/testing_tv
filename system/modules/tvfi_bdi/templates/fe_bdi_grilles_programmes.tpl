              	<div class="inside">
                 	<div class="formGrilleProgrammes">
                 	  
                 	  <form action="<?php echo $this->action; ?>" method="get" >
                 	      <div class="formbody">
                 	      
                     	      <div class="itemForm">
                          	      <?php echo $this->zonemenu; ?>
                     	      
                     	      </div><!-- fin itemForm -->
                     	      
                     	      <div class="itemForm">
                         	      <?php echo $this->paysmenu; ?>
                         	                           	      
                     	      </div><!-- fin itemForm -->
                 	      
                 	      </div><!-- fin formbody -->
                 	  
                 	  </form>
                 	  
                 	  <div class="clear"></div>
                 	
                 	
                 	</div><!-- fin flashGrilleProgrammes -->

					<?php if(count($this->societes) > 0) : ?>
                 	
					<div class="nav_table">
					
						<?php echo $this->alphamenu; ?>

    					<?php echo $this->pagination; ?>
						
									
					</div><!-- fin nav_table -->
					
					<div class="clear"></div>
					

					<table class="tableau" id="grille_programmes" summary="Listes">
						<thead>
							<tr>
								<th width="209"><a><span>Zone géographique</span></a></th>
								<th width="346"><a href="<?php echo $this->baseUrl. '/sort/nom/order/' . ( $this->order == 'asc' ? 'desc' : 'asc') . $GLOBALS['TL_CONFIG']['urlSuffix']
; ?>"><span>Société</span></a></th>
								<th width="180"><a href="<?php echo $this->baseUrl. '/sort/pays/order/' . ( $this->order == 'asc' ? 'desc' : 'asc') .$GLOBALS['TL_CONFIG']['urlSuffix']
; ?>"><span>Pays</span></a></th>
								<th width="205">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($this->societes as $societe): ?>
							<tr>
								<td class="col_zone_geo"><?php echo $societe->Pays()->Zone()->localizedName; ?></td>
								<td class="col_societe"><strong><?php echo $societe->localizedLink; ?></strong></td>
								<td class="col_pays"><?php echo $societe->Pays()->localizedLink; ?></td>
								<td class="col_btn last"><a href="<?php echo $this->action; ?>?file=tl_files/downloadable_files/test.pdf" title="Télécharger la grille"><img src="tl_files/fr/boutons/bt_telecharger_grille.png" alt="Télécharger la grille" /></a></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					
					
					<div class="clear"></div>
					
					<div class="nav_table">

    					<?php echo $this->pagination; ?>
									
					</div><!-- fin nav_table -->
					<?php else: ?>
						<?php echo $GLOBALS['TL_CONFIG']['core']['noResult']; ?>
						
					<?php endif; ?>
					
			</div><!-- fin inside -->

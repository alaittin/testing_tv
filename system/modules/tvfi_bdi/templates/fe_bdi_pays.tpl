                 	<div class="inside">
					<div class="nav_table">
						<?php echo $this->alphamenu; ?>

    					<?php echo $this->pagination; ?>

						<div class="clear"></div>
									
					</div><!-- fin nav_table -->
					
					
					
					<?php if(count($this->countries >0)) : ?>
					
						<table class="tableau" id="liste_pays" summary="Liste des pays">
							<thead>
								<tr>
									<th width="209"><a href="#"><span>Zone géographique</span></a></th>
									<th width="731"><a href="#"><span>Pays</span></a></th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($this->countries as $country): ?>
								<tr>
									<td class="col_zone"><?php echo $country->Zone()->localizedName; ?></td>
									<td class="col_pays"><?php echo $country->localizedLink; ?></td>
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
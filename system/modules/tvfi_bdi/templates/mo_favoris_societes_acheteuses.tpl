                
                    <div class="ombreBox3">
                    
                    <div class="inside">
                    
                        <div class="ce_text"><p><img src="tl_files/icones/ico_favorisSocietes.png"  alt="" class="icoFav" /> Retrouvez ici vos soci&eacute;t&eacute;s favorites. Vous &ecirc;tes automatiquement notifi&eacute; lors d'une nouveaut&eacute;, d'un changement, sur ces soci&eacute;t&eacute;s.</p>
                        </div>
<?php if(count($this->societes >0)) : ?>
                    
    					<?php echo $this->pagination; ?>
    					
    					<div class="clear"></div>
                    
                        <table cellpadding="0" cellspacing="0" id="ListeFavorisProgrammes" class="tableau" >
                            <thead>
                                <tr>
                                    <th class="first <?php echo $this->Input->get('sort') == 'nom' || !$this->Input->get('sort') ? ' sorted' : ''; ?>" width="235"><a href="<?php echo $this->baseUrl; ?>/sort/nom/order/asc.html"><span>Soci&eacute;t&eacute;s</span></a></th>
                                    <th class="<?php echo $this->Input->get('sort') == 'type' ? ' sorted' : ''; ?>"><a href="<?php echo $this->baseUrl; ?>/sort/type/order/asc.html"><span>Type de soci&eacute;t&eacute;</span></a></th>
                                    <th class="<?php echo $this->Input->get('sort') == 'pays' ? ' sorted' : ''; ?>"><a href="<?php echo $this->baseUrl; ?>/sort/pays/order/asc.html"><span>Pays</span></a></th>
                                    <th class="last">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php $i=0; foreach($this->societes as $societe): ?>
                                <tr class=" ">
                                    <td class="first <?php echo $this->Input->get('sort') == 'nom' || !$this->Input->get('sort') ? ' sorted' : ''; ?>"><a href="<?php echo $this->jumpTo . $societe->alias .$GLOBALS['TL_CONFIG']['urlSuffix']; ?>"><?php echo $societe->sta_nom; ?></a></td>
                                    <td class="<?php echo $this->Input->get('sort') == 'type' ? ' sorted' : ''; ?>"><?php if(is_array($societe->getTypesNames())) echo implode(', ', $societe->getTypesNames()); ?></td>
                                    <td class="<?php echo $this->Input->get('sort') == 'pays' ? ' sorted' : ''; ?>"><?php echo $societe->Pays()->localizedLink; ?></td>
                                    <td class="last"><a href="<?php echo $this->deleteFavoriteLink; ?><?php echo $societe->alias; ?>/ajax/true/action/deleteFavorite.html" title="Supprimer des favoris"  class="suppressionFavoris"><img src="tl_files/icones/ico_supprimer.png" alt="Supprimer des favoris" /></a></td>
                                </tr>
								<?php $i++; endforeach; ?>
                            </tbody>
                        </table>
                    
    					<?php echo $this->pagination; ?>
    					
    					
    					<div class="clear"></div> 
    					
    					
    					</div><!-- fin inside --> 
                        
                    </div><!-- ombreBox3 -->
<?php endif; ?>
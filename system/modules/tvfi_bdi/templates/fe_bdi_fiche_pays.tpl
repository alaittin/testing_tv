				    <div class="inside">
					<div class="titrePays">
						<h2><?php echo $this->pays->localizedName; ?></h2>
						<?php if(FE_USER_LOGGED_IN && !$this->isFavorite): ?>
							<a href="<?php echo $this->addToFavoriteLink; ?>" title="Ajouter aux favoris" class="ajoutFavoris"><img src="tl_files/icones/ico_favoris.png" alt="Ajouter aux favoris" /></a>
						<?php endif; ?>
					</div><!-- fin titrePays -->
					
					
					
					</div><!-- fin inside -->
					
					<div class="clear"></div>
					
					<div id="left_main">
				
						<div class="box_280 boxInfosPays">
                
                   			<div class="boxTopGrey">
                        		<h1><img src="tl_files/fr/titre/boxTitle_informationsPays.png" alt="Informations sur le pays" /></h1>
                    		</div><!-- fin boxTopGrey -->
                    
                    		<div class="boxBottom">
                                <div class="ombreBox2">
								<h2>Zone Géographique</h2>
								<p><?php echo $this->pays->Zone()->localizedName; ?></p>
								
								<h2>Capitale</h2>
								<p><?php echo $this->pays->pys_capitale; ?></p>
								
								<h2>Population</h2>
								<p><?php echo $this->pays->pys_population; ?></p>
								
								<h2>Monnaie</h2>
								<p><?php echo $this->pays->pys_monnaie; ?></p>
								
								<?php if($this->pays->pys_foyers_htz > 0): ?>
								<h2>Foyers équipés TV</h2>
								<p><?php echo $this->pays->pys_foyers_htz; ?></p>
								<?php endif; ?>
								
								<?php if($this->pays->pys_foyers_cab > 0): ?>
								<h2>Foyers équipés Câble</h2>
								<p><?php echo $this->pays->pys_foyers_cab; ?></p>
								<?php endif; ?>
								
								<?php if($this->pays->pys_foyers_sat > 0): ?>
								<h2>Foyers équipés Satellite</h2>
								<p><?php echo $this->pays->pys_foyers_sat; ?></p>
								<?php endif; ?>
														
                        		<div class="clear">&nbsp;</div>
                                </div><!-- fin ombre -->
                    		</div><!-- fin boxBottom -->
                
                		</div><!-- fin box_280 -->
						
					</div><!-- fin left -->
					

										
					<div id="right_main">
						<?php if(strlen($this->pays->localizedPresentation)): ?>
						<div class="box_653 boxPresPaysAudio toggledbox marginBottom0">
							<div class="boxTopGrey">
								<h1><img src="tl_files/fr/titre/boxTitle_presentationPaysageAudiovisuel.png" alt="Présentation du paysage audiovisuel" /></h1>
								<div class="boxtoggler close">&nbsp;</div>
							</div><!-- fin top -->
						
							<div class="boxBottom">
							     <div class="ombreBox2">
								<?php echo $this->pays->localizedPresentation; ?>
							     </div><!-- fin ombre -->
							</div><!-- fin bottom -->
					
						</div><!-- fin box_653 -->
						<?php endif; ?>
						
						<?php if(count($this->pays->Tarif() > 0)): ?>
						<div class="box_653 marginBottom0 toggledbox boxTarifs">
							<div class="boxTopGrey">
								<h1><img src="tl_files/fr/titre/boxTitle_tarifs.png" alt="Tarifs" /></h1>
								<div class="boxtoggler close"></div>
							</div><!-- fin top -->
						
							<div class="boxBottom" id="pays_tabs_container">
                                <div class="ombreBox2">
                                                             
								<div class="boxTabs" id="pays_tabs">
							
									<ul class="boxTabsNav">
										<?php foreach($this->pays->tarifsGroupedByType as $type=>$tarifs): ?>
										<li title="Tab_<?php echo standardize($type); ?>"><a id="Tab_<?php echo standardize($type); ?>"><span><?php echo $type; ?></span></a></li>
										<?php endforeach; ?>
									</ul>
									
									<div class="clear"></div>
									
									<?php foreach($this->pays->tarifsGroupedByType as $type=>$tarifs): ?>
									<div class="tabs" id="Tab_<?php echo standardize($type); ?>">
										<table class="tableau zebraTable" id="tarifs_<?php echo standardize($type); ?>" summary="Tarifs" >
											<thead>
												<tr>
													<th class="col_type width_209"><a href="#"><span>Type de programme</span></a></th>
													<th class="col_montant width_394"><a href="#"><span>Montant</span></a></th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($tarifs as $tarif): ?>
												<tr>
													<td class="col_type"><?php echo $tarif->trf_intitule; ?></td>
													<td class="col_montant"><strong><?php echo $tarif->trf_valeur; ?></strong></td>
												</tr>
												
												<?php endforeach; ?>
											</tbody>
										</table>
										
										<div class="clear"></div>
										
									</div><!-- fin tabs -->
								<?php endforeach; ?>
								</div><!-- fin boxtabs -->
						      </div><!-- fin ombre -->
							</div><!-- fin bottom -->
					
						</div><!-- fin box_653 -->
						<?php endif; ?>
						
						<div class="box_653 boxPaysFicheSociete toggledbox marginBottom0">
							<div class="boxTopGrey">
								<h1><img src="tl_files/fr/titre/boxTitle_societes.png" alt="Sociétés" /> (<?php echo $this->totalSociete; ?>)</h1>
								<div class="boxtoggler close"></div>
							</div><!-- fin top -->
						
							<div class="boxBottom">
							     <div class="ombreBox3">
    								
    								<div class="ajaxPages">
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
									</div><!-- end ajaxPages -->
								</div><!-- fin ombre -->
					
							</div><!-- fin bottom -->
					
						</div><!-- fin box_653 -->
						
						<div class="box_653 boxAttachesVisuels toggledbox marginBottom0">
							<div class="boxTopGrey">
								<h1><img src="tl_files/fr/titre/boxTitle_attachesAudiovisuels.png" alt="Attachés audiovisuels" /> (2)</h1>
								<div class="boxtoggler close"></div>
							</div><!-- fin top -->
						
							<div class="boxBottom">
							     <div class="ombreBox2">
								<div class="contact first">
								
									<div class="infosContact">
										<h2 class="nomContact">Maxim Gomez-Sizov</h2>
										<span class="infoContact">BEL AIR MEDIA</span>
										<span class="infoContact">Direction</span>
										<span class="infoContact">Relations Distributeurs - Festivals</span>
									</div><!-- fin infosContact -->
									
									<div class="coordonneesContact">
										<span class="infoContact">Tél : +330 00 00 00 00 </span>
										<span class="infoContact">Fax : +330 00 00 00 00</span>
										<span class="infoContact">maxim.gomez@bel-air-media.com </span>
									</div><!-- fin coordonneesContact -->
									
									<div class="clear"></div>
									
									<div class="lieuAffectation">
										<strong>Centre Culturel et de Coopération Linguistique,<br />
										Kurfürstendamm 211, 10 719<br />
										Berlin Allemagne
										</strong>
									</div>
									
								</div><!-- fin contact -->
								
								<div class="clear"></div>
								
								<div class="contact last">
								
									<div class="infosContact">
										<h2 class="nomContact">Maxim Gomez-Sizov</h2>
										<span class="infoContact">BEL AIR MEDIA</span>
										<span class="infoContact">Direction</span>
										<span class="infoContact">Relations Distributeurs - Festivals</span>
									</div><!-- fin infosContact -->
									
									<div class="coordonneesContact">
										<span class="infoContact">Tél : +330 00 00 00 00 </span>
										<span class="infoContact">Fax : +330 00 00 00 00</span>
										<span class="infoContact">maxim.gomez@bel-air-media.com </span>
									</div><!-- fin coordonneesContact -->
									
									<div class="clear"></div>
									
									<div class="lieuAffectation">
										<strong>Centre Culturel et de Coopération Linguistique,<br />
										Kurfürstendamm 211, 10 719<br />
										Berlin Allemagne
										</strong>
									</div>
									
								</div><!-- fin contact -->
								</div><!-- fin ombre -->
							</div><!-- fin bottom -->
					
						</div><!-- fin box_653 -->
						
						<div class="box_653 boxPaysFicheComments toggledbox">
							<div class="boxTopGrey">
								<h1><img src="tl_files/fr/titre/boxTitle_commentaires.png" alt="Commentaires" /></h1>
								<div class="boxtoggler close"></div>
							</div><!-- fin top -->
						
							<div class="boxBottom">
								<div class="ombreBox2">
									<p>XXXX</p>
								</div><!-- fin fin ombre -->
							</div><!-- fin bottom -->
					
						</div><!-- fin box_653 -->
				
					</div><!-- fin right_main -->
                    
					<div class="clear"></div>
					

				 	<div class="box_ficheSociete">
					
						<div id="left_top">
					
							<div class="box_logo">
								<img src="tl_files/logos/<?php echo $this->societe->fsv_logo; ?>" alt="<?php echo $this->societe->fsv_nom; ?>" />
							</div><!-- fin box_logo -->
						
						</div><!-- fin left -->
					
						<div id="main_top">
						
							<h2><?php echo $this->societe->fsv_nom; ?></h2>
							<h3><?php echo $this->societe->typeNamesAsString; ?></h3>
							<a href="#" title="Ajouter aux favoris" class="ajoutFavoris"><img src="tl_files/icones/ico_favoris.png" alt="Ajouter aux favoris" /></a>
							
							<div class="box_coordonnees">
								<p class="adresse">
									<span><?php echo $this->societe->fsv_adresse; ?></span>
									<span><?php echo $this->societe->fsv_code_postal; ?> <?php echo $this->societe->fsv_ville; ?></span>
								</p>
								<p class="telephone">
									<span>Tél. :  <?php echo $this->societe->fsv_tel; ?></span>
									<span>Fax :  <?php echo $this->societe->fsv_fax; ?></span>
								</p>
								<p class="mail">
									<span><?php echo $this->societe->fsv_email; ?></span>
								</p>
								<div class="clear"></div>
								<div class="bottom"></div>
							</div><!-- fin box_coordonnees -->
							
							<p><?php echo $this->societe->localizedDescription; ?></p>
						</div><!-- fin main -->
						<div class="clear"></div>

					</div><!-- fin box_ficheSociete -->
					
					
                    
					<div class="clear"></div>
					
					<div id="left_main">
				
						
						<?php if(count($this->societe->getGenres())> 0): ?>
						<div class="box_280 boxGenres">
                
                   			<div class="boxTopGrey">
                        		<h1><img alt="Genres" src="tl_files/fr/titre/boxTitle_genres.png" /></h1>
                    		</div><!-- fin boxTopGrey -->
                    
                    		<div class="boxBottom">
                    		
                    		  <div class="ombreBox2">
                 
				 				<ul>
									<li><a href="#">Animation</a></li>
									<li><a href="#">Documentaire</a></li>
									<li><a href="#">Magazine</a></li>
									<li><a href="#">Fiction</a></li>
								</ul>
						
                        		<div class="clear"></div>
                                </div><!-- fin ombre -->
                    		</div><!-- fin boxBottom -->
                
                		</div><!-- fin box_282 -->
					<?php endif; ?>
						
						<div class="box_280 boxGoogleMap">
                
                   			<div class="boxTopGrey">
                        		<h1><img alt="Où trouver cette société ?" src="tl_files/fr/titre/boxTitle_trouver_societe.png" /></h1>
                    		</div><!-- fin boxTopGrey -->
                    
                    		<div class="box_googleMap">

				 				<div id="gmap" style="width: 280px; height: 273px;"></div>

								<div class="masque">&nbsp;</div>
                        		<div class="clear">&nbsp;</div>
                      
                    		</div><!-- fin boxBottom -->
                
                		</div><!-- fin box_282 -->
						
					</div><!-- fin left -->

										
					<div id="right_main">
					
					   <div class="box_653 boxMEAProgramme toggledbox">
                            <div class="boxTopGrey">
                                <h1><img src="tl_files/fr/titre/boxTitle_mise_avant_programmes.png" alt="Mise en avant de programmes"  /></h1>
        				        <div class="boxtoggler close">&nbsp;</div>
                            </div><!-- fin top -->
                            
                            <div class="boxBottom">
                            
                                <div class="ombreBox2">
                                                    
                                <div class="boxSlide" id="program_boxSlide">
                                    <div class="boxNavSlide">
                                        
                                        <a id="NavSlideLeft" class="NavSlideLeft"></a>
                                        <a id="NavSlideRight" class="NavSlideRight"></a>
                                        
                                        </div><!-- fin boxNavSlide -->
                                    
                                    <div class="slide" id="program_slide">
                                        <div class="items" id="program_slide_items">

                                    <?php foreach($this->societe->highlightPrograms as $highlight): ?>
                                        
                                        <div class="item">
                                            <a href="<?php echo $highlight->Programme()->url; ?>"><span class="vignette"><img src="<?php echo $highlight->Programme()->mainPhoto; ?>" alt="Vidéo" /></span></a>
                                            <span class="text"><?php echo $highlight->Programme()->localizedName; ?></span>
                                            <a href="<?php echo $highlight->Programme()->url; ?>" class="voirLaFiche"></a>
                                        </div><!-- fin item -->
                                    <?php endforeach; ?>
                                        
                                        
                                        
                                        <div class="clear"></div>
                                        
                                        </div><!-- fin slide -->
                                        
                                        <p class="linkVoirCatalogue"><a href="#"><img src="tl_files/fr/boutons/bt_voir_catalogue_complet.png"  alt="Voir le catalogue complet" /></a></p>
        										
        										
        										
                                        
                                    
                                </div><!-- fin boxSlide -->
                                
                                </div><!-- fin ombre -->
              
                            
                            
                            </div><!-- fin bottom -->
                        
                        </div><!-- fin programme -->
						
						
						<div class="clear"></div>
						
						<div class="box_653 EquipesContacts toggledbox marginBottom0">
							<div class="boxTopGrey">
								<h1><img src="tl_files/fr/titre/boxTitle_equipe_contacts.png" alt="Equipe et contacts"  /></h1>
								<div class="boxtoggler close"></div>
							</div><!-- fin top -->
							
							<div class="boxBottom boxBottomGreyWhite">

								<div class="boxTabsLeft" id="team_tabs">

									<ul class="boxTabsNav">
										<?php foreach($this->societe->DepartementSocieteVendeuse() as $departement): ?>
											<li title="<?php echo standardize($departement->localizedName); ?>"><a><span><?php echo $departement->localizedName; ?></span></a></li>
										<?php endforeach; ?>
									</ul>
									
									<?php foreach($this->societe->DepartementSocieteVendeuse() as $departement): ?>
									<div class="tabs">
										<?php foreach($departement->ContactSocieteVendeuse() as $contact): ?>
										<?php echo $contact->fcv_prenom; ?> <?php echo $contact->fcv_nom; ?> (<?php echo $contact->departmentLocalizedName; ?>) <br/>
										<?php endforeach; ?>
									</div><!-- fin tabs -->
									
									<div class="clear">&nbsp;</div>
									<?php endforeach; ?>

									
								</div><!-- fin boxtabs -->
			  
							</div><!-- fin bottom -->
						
						</div><!-- fin box -->
						
						<div class="clear"></div>
						
						<div class="box_653 toggledbox marginBottom0">
							<div class="boxTopGrey">
								<h1><img src="tl_files/fr/titre/boxTitle_liens.png" alt="Liens"  /></h1>
								<div class="boxtoggler close"></div>
							</div><!-- fin top -->
							
							<div class="boxBottom boxBottomGreyWhite">

								LIENS
			  
							</div><!-- fin bottom -->
						
						</div><!-- fin box -->
						
					
						
						<div class="box_653 boxList toggledbox boxDocs">
							<div class="boxTopGrey">
								<h1><img src="tl_files/fr/titre/boxTitle_documentations.png" alt="Documentations" /></h1>
								<div class="boxtoggler close"></div>
							</div><!-- fin top -->
							
							<div class="boxBottom">

									<ul>
										<li class="odd"><h1>Titre du document</h1> <a href="#" title="Télécharger le document..." class="link"><img src="tl_files/fr/boutons/bt_telecharger.png" alt="Télécharger" /></a></li>
										<li><h1>Titre du document</h1> <a href="#" title="Télécharger le document..." class="link"><img src="tl_files/fr/boutons/bt_telecharger.png" alt="Télécharger" /></a></li>

										<li  class="odd"><h1>Titre du document</h1> <a href="#" title="Télécharger le document..." class="link"><img src="tl_files/fr/boutons/bt_telecharger.png" alt="Télécharger" /></a></li>
										<li class="last"><h1>Titre du document</h1> <a href="#" title="Télécharger le document..." class="link"><img src="tl_files/fr/boutons/bt_telecharger.png" alt="Télécharger" /></a></li>
									</ul>
									<div class="clear">&nbsp;</div>

			  
							</div><!-- fin bottom -->
						
						</div><!-- fin box -->
					
					</div><!-- fin right Main -->
                    
					
					<div class="clear"></div>

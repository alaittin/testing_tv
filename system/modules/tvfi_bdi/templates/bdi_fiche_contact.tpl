				 	<div class="box_ficheContact">
					
						<div id="left_main">
					
							<div class="box_logo">
								<img src="<?php echo $contact->lastPosteSocieteAcheteuse->DepartementSocieteAcheteuse()->SocieteAcheteuse()->imageSRC; ?>" alt="<?php echo $contact->lastPosteSocieteAcheteuse->DepartementSocieteAcheteuse()->SocieteAcheteuse()->sta_nom; ?>" />
							</div><!-- fin box_logo -->
						
						</div><!-- fin left -->
					
						<div id="right_main">
						
							<h2>Laeticia Recayte</h2>
							<a href="#" title="Envoyer un mail" class="envoiMail"><img src="tl_files/icones/picto_mail_table_contacts.png" alt="Envoyer un mail" /></a>
							<a href="#" title="Ajouter aux favoris" class="ajoutFavoris"><img src="tl_files/icones/ico_favoris.png" alt="Ajouter aux favoris" /></a>
							
							<img src="tl_files/illustrations/laeticia.jpg" alt="Laeticia Recayte" class="photo" />
							
							<div class="infosContact">
								<div class="box_coordonnees">
								
									<h3>Directrice</h3>
									
									<p class="colLeft">
										<span><?php echo $contact->lastPosteSocieteAcheteuse->DepartementSocieteAcheteuse()->SocieteAcheteuse()->localizedLink; ?></span>
										<span>Activités</span>
									</p>
									<p class="colCenter">
										<span>Tél. :  +33146432180</span>
										<span>Tél Port. : +3362595225599</span>
									</p>
									<p class="colRight">
										<span>Fax :  +33146432033</span>
									</p>
								</div><!-- fin box_coordonnees -->
								
								<ul class="liste_reseauxSociaux">
									<li><a href="#" title="Aller sur Facebook"><img src="tl_files/icones/ico_contact_facebook.png" alt="Facebook" /></a></li>
									<li><a href="#" title="Aller sur Linkedin"><img src="tl_files/icones/ico_contact_linkedin.png" alt="Linkedin" /></a></li>
									<li><a href="#" title="Aller sur Viadeo"><img src="tl_files/icones/ico_contact_viadeo.png" alt="Viadeo" /></a></li>
									<li><a href="#" title="Aller sur Skype"><img src="tl_files/icones/ico_contact_skype.png" alt="Skype" /></a></li>
								</ul>
							</div><!-- fin infosContact -->
							
							<div class="clear"></div>
						</div><!-- fin main -->
						<div class="clear"></div>
					</div><!-- fin box_ficheSociete -->

					<div class="clear"></div>





   				 	<div class="box_ficheSociete">
					
						<div id="left_top">
					
							
							<img src="<?php echo $this->societe->imageSRC; ?>" alt="<?php echo $this->societe->sta_nom; ?>" />
							<a href="<?php echo $this->organigramLink; ?>" title=""><img src="tl_files/fr/boutons/bt_voirOrganigrammeSociete.png" alt="Voir l'organogramme de la société" /></a>
						
						</div><!-- fin left -->
					
						<div id="main_top">
						
							<h2><?php echo $this->societe->sta_nom; ?></h2>
							<h3><?php echo $this->societe->Pays()->localizedLink; ?></h3>
							<h3><?php if(is_array($this->societe->getTypesNames())) echo implode(', ', $this->societe->getTypesNames()); ?></h3>
							<h3><?php echo $this->societe->sta_statut; ?></h3>
							<?php if(FE_USER_LOGGED_IN && !$this->isFavorite): ?>
							<a href="<?php echo $this->addToFavoriteLink; ?>" title="Ajouter aux favoris" class="ajoutFavoris"><img src="tl_files/icones/ico_favoris.png" alt="Ajouter aux favoris" /></a>
							<?php endif; ?>
							<div class="box_coordonnees">
								<p class="adresse">
									<span><?php echo $this->societe->sta_adresse; ?></span>
									<span><?php echo $this->societe->sta_postal; ?> <?php echo $this->societe->ville; ?></span>
								</p>
								<p class="telephone">
									<span><?php $this->societe->sta_telephone ? 'Tél. :  '. $this->societe->sta_telephone : ''; ?></span>
									<span><?php $this->societe->sta_telephone ? 'Fax :  '. $this->societe->sta_fax : ''; ?></span>
								</p>
								<p class="mail">
									<span><?php echo $this->societe->sta_email; ?></span>
								</p>
								<div class="clear"></div>
								<div class="bottom"></div>
							</div><!-- fin box_coordonnees -->
							
							<p class="text">XXXXX <a href="#">Afficher la suite</a></p>
						</div><!-- fin main -->
						<div class="clear"></div>
						
					</div><!-- fin box_ficheSociete -->
                    
					<div class="clear"></div>
					
					<div id="left_main">
				
				 		<?php $genres = $this->societe->getGenresNames();
				 				if(is_array($genres)) : ?>
						<div class="box_280 boxGenres">
                
                   			<div class="boxTopGrey">
                        		<h1><img alt="Genres" src="tl_files/fr/titre/boxTitle_genres.png" /></h1>
                    		</div><!-- fin boxTopGrey -->
                    
                    		<div class="boxBottom">
                 
				 				<ul class="liste">
				 				
				 				<?php foreach($genres as $genre) : ?>
									<li><?php echo $genre; ?></li>				 				
				 				<?php endforeach; ?>
								</ul>
						
                        		<div class="clear">&nbsp;</div>
                      
                    		</div><!-- fin boxBottom -->
                
                		</div><!-- fin box_282 boxGenres -->
                		<?php endif; ?>
						
						
				 		<?php $themes = $this->societe->getThemesNames();
				 				if(is_array($themes)) : ?>
						<div class="box_280 boxMotsCles">
                
                   			<div class="boxTopGrey ">
                        		<h1><img src="tl_files/fr/titre/boxTitle_motsCles.png" alt="Mots clés" /></h1>
                    		</div><!-- fin boxTopGrey -->
                    
                    		<div class="boxBottom">
                 
				 				<ul class="liste">
				 				
				 				<?php foreach($themes as $theme) : ?>
									<li><?php echo $theme; ?></li>				 				
				 				<?php endforeach; ?>
								</ul>
						
                        		<div class="clear">&nbsp;</div>
                      
                    		</div><!-- fin boxBottom -->
                
                		</div><!-- fin box_282 boxMotsCles -->
                		<?php endif; ?>
						
						<div class="box_280">
                
                   			<div class="boxTopGrey">
                        		<h1><img alt="Où trouver cette société ?" src="tl_files/fr/titre/boxTitle_trouver_societe.png" /></h1>
                    		</div><!-- fin boxTopGrey -->
                    
                    		<div class="box_googleMap">

				 				<div id="gmap" style="width: 280px; height: 273px;"></div>

								<div class="masque">&nbsp;</div>
                        		<div class="clear">&nbsp;</div>
                      
                    		</div><!-- fin boxBottom -->
                
                		</div><!-- fin box_282 -->
						
					</div><!-- fin left_main -->
					

										
					<div id="right_main">
					
						<div class="box_653 marginBottom0 toggledbox boxInfoSociete">
							<div class="boxTopGrey">
								<h1><img src="tl_files/fr/titre/boxTitle_InformationsSociete.png" alt="Informations sur la société" /></h1>
								<div class="boxtoggler close"></div>
							</div><!-- fin top -->
						
							<div class="boxBottom">
							     <div class="ombreBox2">

								<p>
									<span><strong>Diffusion : </strong><?php echo implode(', ', $this->societe->getBroadcasts()); ?></span>
									<?php if($this->societe->sta_typepay == '1'): ?><span><strong>Chaîne cryptée</strong></span><?php endif; ?>
									<?php if($this->societe->sta_lang_diff): ?><span><strong>Langue de diffusion : </strong><?php echo $this->societe->sta_lang_diff; ?></span><?php endif; ?>
									<?php $translations = $this->societe->getTranslations(); if(count($translations)>0): ?><span><strong>Traduction :</strong> <?php echo implode(', ', $translations); ?></span><?php endif; ?>
									<?php if($this->societe->sta_abonnes): ?><span><strong>Abonnés :</strong> <?php echo $this->societe->sta_abonnes; ?></span><?php endif; ?>
									<?php if($this->societe->sta_couv_cab): ?><span><strong>Zone de couverture câble :</strong> <?php echo $this->societe->sta_couv_cab; ?></span><?php endif; ?>
									<?php if($this->societe->sta_couv_sat): ?><span><strong>Zone de couverture satellite :</strong> <?php echo $this->societe->sta_couv_sat; ?></span><?php endif; ?>
									<?php if($this->societe->sta_couv_htz): ?><span><strong>Zone de couverture hertzienne :</strong> <?php echo $this->societe->sta_couv_htz; ?></span><?php endif; ?>
									<?php if($this->societe->sta_couv_hzn): ?><span><strong>Zone de couverture hertzienne numérique :</strong> <?php echo $this->societe->sta_couv_hzn; ?></span><?php endif; ?>

									<?php if($this->societe->sta_prod): ?><span><strong>Production propre :</strong> <?php echo $this->societe->sta_prod; ?>%</span><?php endif; ?>
									<?php if($this->societe->sta_coprod): ?><span><strong>Co-production :</strong> <?php echo $this->societe->sta_coprod; ?>%</span><?php endif; ?>
									<?php if($this->societe->sta_achat): ?><span><strong>Achat :</strong> <?php echo $this->societe->sta_achat; ?>%</span><?php endif; ?>
									<?php if($this->societe->sta_locaux): ?><span><strong>Achats locaux :</strong> <?php echo $this->societe->sta_locaux; ?>%</span><?php endif; ?>
									<?php if($this->societe->sta_internat): ?><span><strong>Achats Internationaux :</strong> <?php echo $this->societe->sta_internat; ?>%</span><?php endif; ?>
									<?php if($this->societe->sta_support): ?><span><strong>Support :</strong> <?php echo $this->societe->sta_support; ?>%</span><?php endif; ?>

									<!--  TODO  --><span><strong>Bouquet de diffusion</strong></span>
								</p>
								
								</div><!-- fin ombre -->
							  
							</div><!-- fin bottom -->
					
						</div><!-- fin box_653 -->




						<div class="box_653 marginBottom0 toggledbox boxComments">
							<div class="boxTopGrey">
								<h1><img src="tl_files/fr/titre/boxTitle_commentaires.png" alt="Commentaires" /></h1>
								<div class="boxtoggler close"></div>
							</div><!-- fin top -->
						
							<div class="boxBottom">
							     <div class="ombreBox2">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vehicula dolor sodales mi accumsan vel lobortis libero feugiat. Nulla facilisi. Ut turpis odio, egestas consectetur ornare sit amet, pretium quis dolor. Fusce dignissim, est quis placerat imperdiet, ante ipsum rutrum lacus, quis pellentesque ipsum nisi id nisi. Vestibulum adipiscing quam urna, id molestie lorem. Aliquam non porttitor ipsum. Nam ullamcorper molestie nisi ac eleifend.<br />
								Pellentesque id euismod ante. Quisque est ligula, congue quis aliquet quis, vehicula in erat. Morbi augue lacus, rhoncus id convallis quis, accumsan ac turpis. Integer tristique interdum lectus, rutrum pretium tellus varius sed. Donec dolor turpis, fringilla quis pretium sit amet, sodales eu erat.</p>
								
								</div><!-- fin ombre -->
							</div><!-- fin bottom -->
					
						</div><!-- fin box_653 boxComments -->
						
						<?php if($this->societe->sta_achat): ?>
						<div class="box_653 marginBottom0 toggledbox boxAchat">
							<div class="boxTopGrey">
								<h1><img src="tl_files/fr/titre/boxTitle_achat.png" alt="Achat" /></h1>
								<div class="boxtoggler close"></div>
							</div><!-- fin top -->
						
							<div class="boxBottom">
							     <div class="ombreBox2">
								<p><?php echo $this->societe->sta_achat; ?></p>
								
								</div><!-- fin ombre -->
							</div><!-- fin bottom -->
					
						</div><!-- fin box_653 boxAchat -->
						<?php endif; ?>
					</div><!-- fin bottom -->

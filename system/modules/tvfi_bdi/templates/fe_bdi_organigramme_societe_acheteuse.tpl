   				 	<div class="box_ficheSociete">
					
						<div id="left_top">
					
							
							<img src="<?php echo $this->societe->imageSRC; ?>" alt="<?php echo $this->societe->sta_nom; ?>" />
							<a href="<?php echo $this->ficheLink; ?>" title=""><img src="tl_files/fr/boutons/bt_voirOrganigrammeSociete.png" alt="Voir l'organogramme de la société" /></a>
						
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
					<?php foreach($this->societe->DepartementSocieteAcheteuse() as $departement) : ?>
					<div class="box_946 boxOrganigramme toggledbox  marginBottom0">
					
						<div class="boxTopGrey">
							<h1><img src="tl_files/fr/titre/boxTitle_departement.png" alt="Nom du département" /> <span class="NomDepartement"><?php echo $departement->ach_nom; ?></span></h1>
							<div class="boxtoggler close"></div>
						</div><!-- fin top -->
						
						<div class="boxBottom">
						  <div class="ombreBox2">
                 	
							
							<p class="chapo"><?php echo $departement->ach_commentaire; ?></p>
							
							<?php foreach($departement->PosteSocieteAcheteuse() as $poste) : ?>
							<div class="contact">
							
								<div class="infosContact">
									<h2 class="nomContact"><?php echo $poste->contact->fullNameLink; ?></h2>
									<span class="infoContact"><?php echo $this->societe->localizedLink; ?></span>
									<span class="infoContact"><?php echo $poste->pst_ach_nom; ?></span>
									<span class="infoContact"><?php echo $poste->pst_fonction; ?></span>
								</div><!-- fin infosContact -->
								
								<div class="coordonneesContact">
									<?php if($poste->pst_telephone): ?><span class="infoContact">Tél : <?php echo $poste->pst_telephone; ?> </span><?php endif; ?>
									<?php if($poste->pst_fax): ?><span class="infoContact">Fax : <?php echo $poste->pst_fax; ?></span><?php endif; ?>
									<?php if($poste->pst_email): ?><span class="infoContact"><a href="mailto:<?php echo $poste->pst_email; ?>" class="mailto"><?php echo $poste->pst_email; ?></a> </span><?php endif; ?>
								</div><!-- fin coordonneesContact -->
								
								<div class="clear"></div>
								
								<a href="#" title="Ajouter aux favoris" class="ajoutFavoris"><img src="tl_files/icones/ico_favoris.png" alt="Ajouter aux favoris" /></a>
								
							</div><!-- fin contact -->
							
							<div class="clear"></div>
							
							<?php endforeach; ?>
							
							</div><!-- fin ombre -->
							
						</div><!-- fin boxBottom -->
						
					</div><!-- fin box_940 -->

					<div class="clear"></div>
					<?php endforeach; ?>
				</div><!-- fin bottom -->

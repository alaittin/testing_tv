<?php if(count($this->societes >0)) : ?>

<ul>
<?php $i=0; foreach($this->contacts as $contact): ?>
    <li class="<?php echo $i&1 ? 'odd' : 'even'; ?>">
        <h1><?php echo $contact->fullNameLink; ?></h1>
		<h2><?php echo $contact->lastPosteSocieteAcheteuse->pst_fonction; ?></h2>
		<p><?php echo $contact->lastPosteSocieteAcheteuse->DepartementSocieteAcheteuse()->SocieteAcheteuse()->localizedLink; ?> - <?php echo $contact->lastPosteSocieteAcheteuse->DepartementSocieteAcheteuse()->SocieteAcheteuse()->Pays()->localizedLink; ?></p>
    </li>
<?php $i++; endforeach; ?>

    <li class="last">
        <p class="bt_tout"><a href="fr/bdi/contacts.html"  ><img src="tl_files/fr/boutons/bt_voir_tous_contacts.png" alt="Voir tous les contacts"  /></a></p>
    </li>
</ul>
<?php endif; ?>


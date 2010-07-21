<?php if(count($this->societes >0)) : ?>

<ul>
<?php $i=0; foreach($this->societes as $societe): ?>
    <li class="<?php echo $i&1 ? 'odd' : 'even'; ?>">
        <h1><?php echo $societe->localizedLink; ?></h1>
        <h2><?php if(is_array($societe->getTypesNames())) echo implode(', ', $societe->getTypesNames()); ?></h2>
        <p><?php echo $societe->Pays()->localizedLink; ?></p>
    </li>
<?php $i++; endforeach; ?>

    <li class="last">
        <p class="bt_tout"><a href="fr/bdi/societes.html"  ><img src="tl_files/fr/boutons/bt_voir_toutes_societes.png" alt="Voir toutes les sociétés"  /></a></p>
    </li>
</ul>
<?php endif; ?>
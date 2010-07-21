<?php if(count($this->countries >0)) : ?>

<ul>
<?php $i=0; foreach($this->countries as $country): ?>
    <li class="<?php echo $i&1 ? 'odd' : 'even'; ?>">
        <h1><?php echo $country->localizedLink; ?></h1>
        <h2><?php echo $GLOBALS['TL_CONFIG']['bdi']['updatedOn'] . $country->formattedModificationDate; ?></h2>
    </li>
<?php $i++; endforeach; ?>

    <li class="last">
        <p class="bt_tout"><a href="fr/bdi/countries.html"  ><img src="tl_files/fr/boutons/bt_voir_tous_pays.png" alt="Voir tous les pays"  /></a></p>
    </li>
</ul>
<?php endif; ?>
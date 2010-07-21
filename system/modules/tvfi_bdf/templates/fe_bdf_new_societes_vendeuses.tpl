<?php if(count($this->societes >0)) : ?>

<ul>
<?php $i=0; foreach($this->societes as $societe): ?>
    <li class="<?php echo $i&1 ? 'odd' : 'even'; ?> <?php if($i == count($this->societes)-1) echo 'last'; ?>">
        <h1><?php echo $societe->localizedLink; ?></h1>
        <h2><?php echo $societe->formattedModificationDate; ?></h2>
    </li>
<?php $i++; endforeach; ?>

</ul>
<?php endif; ?>
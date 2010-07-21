<!-- indexer::stop -->
<div id="bloc_search">

    <form action="<?php echo $this->action; ?>" method="get" >
        <div class="formbody" >
            <label><img src="tl_files/fr/titre/text_rechercher.png" alt="RECHERCHER" /></label>
            <input type="hidden" name="meta" value="prepare">
            <input type="hidden" name="mode" value="simple">
            <input type="text" name="kw" class="text" value="<?php echo $this->keyword; ?>" />
            <span><img src="tl_files/fr/titre/text_dans.png" alt="Dans" /></span>
            <select name="entity">
                <option value="SocieteAcheteuse">{{iflng::en}}Companies{{iflng}}{{iflng::fr}}Sociétés{{iflng}}</option>
                <?php if(FE_USER_LOGGED_IN && $this->User->isMemberOf(1)): ?><option value="Pays">{{iflng::en}}Countries{{iflng}}{{iflng::fr}}Pays{{iflng}}</option><?php endif; ?>
            </select>
            <input type="image" src="css/images/form/bt_submitOk.gif" class="submit" />
            <div class="clear"></div>
        </div><!-- fin formbody -->
    </form>
    
    
    <div id='searchtoggler' class="searchtoggler open"></div>
	<div id="advancedSearch" style="padding:40px;">
		<h3>Recherche avancée</h3>
		<p>Liste des options</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>	
	</div>
</div><!-- fin bloc_search -->

<!-- indexer::continue -->

<div id="tl_buttons">
	<a href="<?php echo $this->href; ?>" class="header_back" title="<?php echo $this->title; ?>"><?php echo $this->button; ?></a>
</div>	

<div class="tl_listing_container">
	<div onmouseout="Theme.hoverDiv(this, 0);" onmouseover="Theme.hoverDiv(this, 1);" class="tl_header" style="">
		<div style="text-align: right;">
			<a title="" href="typolight/main.php?do=societe_vendeuse&table=tl_tvfi_bdf_bo_societe_vendeuse&id=<?php echo $this->societe->id ?>&act=edit">
				<img width="12" height="16" alt="" src="system/themes/default/images/edit.gif">
			</a>
		</div>
		<table cellspacing="0" cellpadding="0" summary="Table lists all details of the header record" class="tl_header_table">
			<tbody><tr>
				<td><span class="tl_label">Societe:</span> </td>
				<td><?php echo $this->societe->fsv_nom ?></td>
			</tr>
			<tr>
				<td><span class="tl_label">Desc/logo:</span> </td>
				<td>Show logo</td>
			</tr>
		</tbody>
	</table>
</div>
 			
<form action="typolight/main.php?do=data_version" id="tl_tvfi_confirm_changes" class="tl_form" method="post" enctype="application/x-www-form-urlencoded">
<input type="hidden" value="<?php echo $this->societe->id ?>" name="id">
<div class="tl_formbody_edit" style="padding:0 0;">
	<input type="hidden" name="FORM_SUBMIT" value="confirm_changes" />
	<?php if (count($this->arrChanges) > 0) { ?>
	<?php foreach ($this->arrChanges as $change){ ?>
		<input type='hidden' name='statuses[]' value="<?php echo $change['id']; ?>">
		<div onmouseout="Theme.hoverDiv(this, 0);" onmouseover="Theme.hoverDiv(this, 1);" class="tl_content" style="">
			<div class="limit_height block" style="float: left; display: inline;width:615px;">
				<p> <strong><?php echo $this->labels[$change['column_name']][0] ?></strong>
				<?php
				if ($change['column_name'] == 'type')
				{
				 	$before = "";
					$after  = "";
					$a1     = unserialize($change['old_value']);
					foreach($a1 as $type){ $before .= $this->all_types[$type].","; }
#					$before = implode(",", unserialize($change['old_value']));
					$a2 = unserialize($change['new_value']);
					foreach($a2 as $type){ $after .= $this->all_types[$type].","; }							 
				?>	  
					<br><b>Previous Value:</b><?php echo $before; ?>
					<br><b>New Value:</b> <?php echo $after; ?>
				<?php } else {	?>	  
					<br><b>Previous Value:</b><?php echo $change['old_value']; ?>
					<br><b>New Value:</b> <?php echo $change['new_value']; ?>
				<?php }	?>	  						
				</p>
			</div>
			<div class="tl_radio_container mandatory" id="ctrl_status_<?php echo $change['id']; ?>" style="float: right; display: inline;">
				<input type="radio" onfocus="Backend.getScrollOffset();" value="accept" class="tl_radio" id="opt_status_0" name="status_<?php echo $change['id']; ?>"> 
				<label for="opt_status_0">accept</label>
				<br>
				<input type="radio" onfocus="Backend.getScrollOffset();" value="hold" class="tl_radio" id="opt_status_1" name="status_<?php echo $change['id']; ?>"> 
				<label for="opt_status_1">hold</label>
				<br>
				<input type="radio" onfocus="Backend.getScrollOffset();" value="reject" class="tl_radio" id="opt_status_2" name="status_<?php echo $change['id']; ?>"> 
				<label for="opt_status_2">reject</label>
			</div>
		</div>
	<?php } ?>
	<div class="tl_submit_container">
		<input type="submit" value="Sauvegarder" accesskey="s" class="tl_submit" id="save" name="save">
		<input type="submit" value="Sauvegarder et fermer" accesskey="c" class="tl_submit" id="saveNclose" name="saveNclose">
	</div>
	
	<?php } else {
		echo "There is no change!";
	}?>
</div>
</form>

<div id="tl_buttons">
	<!--a href="<?php echo $this->href; ?>" class="header_back" title="<?php echo $this->title; ?>"><?php echo $this->button; ?></a-->
</div>	

<!-- begin -->
<form method="post" class="tl_form" action="typolight/main.php?do=data_version">
	<div class="tl_formbody">
		<input type="hidden" value="tl_filters" name="FORM_SUBMIT">
		<div class="tl_panel">

			<div class="tl_img_submit_panel tl_subpanel">
				<input type="image" value="apply changes" title="Appliquer" class="tl_img_submit" src="system/themes/default/images/reload.gif" id="filter" name="filter">
			</div>

			<div class="tl_limit tl_subpanel">
				<strong>Afficher:</strong>
				<select class="tl_select active" name="tl_limit">
					<option value="tl_limit">Enregistrements</option>

					<option value="all">Tous</option>
				</select> 
			</div>

			<div class="tl_search tl_subpanel">
				<strong>Chercher:</strong>
				<select class="tl_select" name="tl_field">
					<option value="fsv_adresse">Adresse</option>
					<option selected="selected" value="fsv_nom">Nom</option>
				</select>
				<span>=</span>
				<input type="text" value="" class="tl_text" name="tl_value">
			</div>

			<div class="clear"></div>

		</div>
	</div>
</form>
<!-- end -->

<table class="tl_listing" summary="Table lists records" cellpadding="0" cellspacing="0">
	<tbody>
		<tr onmouseover="Theme.hoverRow(this, 1);" onmouseout="Theme.hoverRow(this, 0);">
			<td colspan="2" class="tl_folder_tlist"></td>
		</tr>

		<?php if (count($this->changedObj) > 0) { ?>
 
			<?php foreach ($this->changedObj as $change_obj): ?> 
				<tr onmouseover="Theme.hoverRow(this, 1);" onmouseout="Theme.hoverRow(this, 0);">
					<td style="" class="tl_file_list"> <span style="color: rgb(179, 179, 179); padding-left: 3px;"><?php echo $change_obj['name']; ?></span></td>
					<td style="" class="tl_file_list tl_right_nowrap">
							<a href="typolight/main.php?do=data_version&act=view_societe_changes&id=<?php echo $change_obj['pid']; ?>" title="Validate data ID 3">
								<img src="system/themes/default/images/edit.gif" alt="Validate" height="16" width="12"></a> 
							<a href="typolight/main.php?do=data_version&;act=show&;id=<?php echo $change_obj['id']; ?>" title="Show data ID 3">
								<img src="system/themes/default/images/show.gif" alt="Details" height="16" width="14"></a> 
								<!--a href="typolight/main.php?do=data_version&amp;act=delete&amp;id=<?php echo $change_obj['id']; ?>" title="Delete Data ID 3" 
									onclick="if (!confirm('Voulez-vous vraiment supprimer cette entrée ID 3 ?')) return false; Backend.getScrollOffset();">
									<img src="system/themes/default/images/delete.gif" alt="Delete" height="16" width="14"></a> 
									<a href="typolight/main.php?do=data_version&amp;act=edit&amp;id=<?php echo $change_obj['id']; ?>" title="Edit data ID 3">
										<img src="system/themes/default/images/edit.gif" alt="Edit" height="16" width="12"></a--> 
						</td>
					</tr>
				<?php endforeach; ?>	
		<?php } else { "no change";} ?>
	</tbody>
</table>



<!-- indexer::stop -->
<div class="<?php echo $this->class; ?> two_column tableform logout block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
<?php if ($this->headline): ?>

<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
<?php endif; ?>

<form action="<?php echo $this->action; ?>" id="tl_logout" method="post">
<div class="formbody">
<input type="hidden" name="FORM_SUBMIT" value="tl_logout" />
<table cellspacing="0" cellpadding="0" summary="">
  <tr class="row_0 row_first">
    <td class="login_info"><?php echo $this->loggedInAs; ?><br /><?php echo $this->lastLogin; ?></td>
  </tr>
  <tr class="row_1 row_last">
    <td><div class="submit_container"><input type="submit" class="submit" value="<?php echo $this->slabel; ?>" /></div></td>
  </tr>
</table>
</div>
</form>

</div>
<!-- indexer::continue -->

<span>Choose the category:</span>

<form id="form" action="" method="GET">
<select name="cat">
  <?php foreach($this->categories as $category): ?>
    <option value="<?php echo $category['id']; ?>"<?php if ($category['selected']): ?> selected="selected"<?php endif; ?>><?php echo $category['title']; ?></option>
  <?php endforeach; ?>
</select>
<input type="submit" value="OK" />
</form>

<div id="cd_collection">
  <h3><?php echo $this->catTitle; ?></h3>
  <?php echo $this->catDescription; ?>

  <table border="0" cellpadding="4">
    <?php foreach ($this->cds as $cd): ?>
    <tr>
      <td><img src="<?php echo $cd['src']; ?>" height="100" width="100" alt="<?php echo $cd['alt']; ?>" /></td>
      <td>
        <p><strong><?php echo $cd['title']; ?></strong> (<?php echo $cd['artist']; ?>)</p>
        <?php echo $cd['comment']; ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>

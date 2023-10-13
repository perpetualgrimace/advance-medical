<?php

$locations = explode(";", $page->locations());

?>

<span class="select-container subnav-select-container">
  <select class="subnav-select" name="select" data-location-select>
    <option value="all" selected><?= $page->locationLabel() ?></option>
    <?php for($i = 0; $i < count($locations); $i++): ?>
      <option value="<?= preg_replace('/^-/', '', sanitize($locations[$i])) ?>"><?= $locations[$i] ?></option>
    <?php endfor ?>
  </select>
</span>

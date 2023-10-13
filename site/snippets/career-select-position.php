<?php

$positions = explode(",", $page->positions());

?>

<span class="select-container">
  <select name="select" data-position-select>
    <option value="all" selected><?= $page->positionLabel() ?></option>
    <?php for($i = 0; $i < count($positions); $i++): ?>
        <option value="<?= preg_replace('/^-/', '', sanitize($positions[$i])) ?>"><?= $positions[$i] ?></option>
    <?php endfor ?>
  </select>
</span>

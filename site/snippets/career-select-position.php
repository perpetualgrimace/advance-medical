<?

$positions = explode(",", $page->positions());

?>

<span class="select-container">
  <select name="select" data-position-select>
    <option value="all" selected><?= $page->positionLabel() ?></option>
    <? for($i = 0; $i < count($positions); $i++): ?>
        <option value="<?= preg_replace('/^-/', '', sanitize($positions[$i])) ?>"><?= $positions[$i] ?></option>
    <? endfor ?>
  </select>
</span>

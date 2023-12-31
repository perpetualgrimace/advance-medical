<?php
// $categories = ['physician', 'expert', 'client', 'participant'];
$categories = $page->children();

?>

<span class="select-container subnav-select-container">
  <select class="subnav-select" name="select" data-category-select>
    <option value="all" selected><?= $page->categoryLabel() ?></option>
    <?php foreach($categories as $category):
      $categoryField = $category->slug();
      $categoryName = $category->title();

      // check for visible children
      if ($category->children()->listed()->count() > 0):
    ?>
      <option value="<?= $categoryField ?>"><?= $categoryName ?></option>
    <?php endif; endforeach ?>
  </select>
</span>

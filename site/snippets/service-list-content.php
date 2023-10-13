<?

// check for optional variables passed from template
if(isset($layout)) { $layout = $layout; } else { $layout = 'g-9'; }

// get children
$children = $page->children()->visible();

?>

<article class="g-col <?= $layout ?>">
  <?= $page->text()->kirbytext() ?>

  <ul class="teaser-list u-margin-top-lg">
    <? foreach ($children as $child): ?>
      <? pattern('teaser', ['item' => $child]) ?>
    <? endforeach ?>
  </ul>

</article>

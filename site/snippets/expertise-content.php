<?

// get children
$children = $page->children()->visible();

// check for optional variables passed from template
if(isset($image)) { $filename = $image; } else { $filename = NULL; }

?>

<? if($filename != NULL): ?>
  <figure class="figure g-col g-4 u-float-right">
    <? snippet('retina-img', ['filename' => $filename, 'class' => 'u-margins-auto', 'extension' => 'jpg']) ?>
  </figure>
<? endif ?>

<article class="g-col g-8">
  <?= $page->text()->kirbytext() ?>

  <ul class="teaser-list u-margin-top-lg">
    <? foreach ($children as $child): ?>
      <? pattern('teaser', ['item' => $child]) ?>
    <? endforeach ?>
  </ul>

</article>

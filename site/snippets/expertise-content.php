<?php

// get children
$children = $page->children()->listed();

// check for optional variables passed from template
if(isset($image)) { $filename = $image; } else { $filename = NULL; }

?>

<?php if($filename != NULL): ?>
  <figure class="figure g-col g-4 u-float-right">
    <?php snippet('retina-img', ['filename' => $filename, 'class' => 'u-margins-auto', 'extension' => 'jpg']) ?>
  </figure>
<?php endif ?>

<article class="g-col g-8">
  <?= $page->text()->kirbytext() ?>

  <ul class="teaser-list u-margin-top-lg">
    <?php foreach ($children as $child): ?>
      <?php pattern('teaser', ['item' => $child]) ?>
    <?php endforeach ?>
  </ul>

</article>

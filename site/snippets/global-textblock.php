<?php

// check for optional variables passed from template
if(isset($layout)) { $layout = $layout; } else { $layout = 'g-8'; }
if(isset($field)) { $field = $page->$field(); } else { $field = $page->text(); }
if(isset($caption)) { $caption = $page->$caption(); } else { $caption = $page->textCaption(); }
if(isset($image)) { $filename = $image; } else { $filename = NULL; }
if (isset($extension)) { $extension = $extension; } else { $extension = 'png'; }

?>

<?php if($filename != NULL): ?>
  <figure class="figure g-col g-4 u-float-right">
    <?php snippet('retina-img', array('filename' => $filename, 'class' => 'u-margins-auto', 'extension' => $extension)) ?>
    <?php if($caption != ''): ?>
      <figcaption class="figcaption u-margin-top">
        <?= $caption ?>
      </figcaption>
    <?php endif ?>
  </figure>
<?php endif ?>

<article class="g-col <?= $layout ?>">
  <?= $field->kirbytext() ?>
</article>

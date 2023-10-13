<?

// check for optional variables passed from template
if(isset($layout)) { $layout = $layout; } else { $layout = 'g-8'; }
if(isset($field)) { $field = $page->$field(); } else { $field = $page->text(); }

// author
if ($page->author() != '') {
  pattern('author', ['source' => $page->author()]);
} ?>

<article class="content g-col <?= $layout ?>">

  <?= $field->kirbytext() ?>
  
</article>

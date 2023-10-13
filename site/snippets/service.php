<?

// check for optional variables passed from template
if(isset($layout)) { $layout = $layout; } else { $layout = 'g-9'; }

// define varibles
$text = $page->text()->kt();
$processes = $page->processes()->toStructure();
$categories = $page->categories()->toStructure();

?>

<article class="g-col <?= $layout ?>">

  <?= $text ?>

  <? if ($processes != '') {
    foreach ($processes as $process) {
      pattern ('service-process', ['process' => $process]);
    }
  } ?>

  <? if ($categories != '') {
    foreach ($categories as $category): ?>
      <h3 class="gamma u-margin-top-lg"><?= $category->title() ?></h3>
      <p class="delta u-margin-top-off"><?= $category->caption() ?></p>
    <? endforeach;
  } ?>

</article>

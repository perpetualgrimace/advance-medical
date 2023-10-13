<?php

if ($page->heroImg() != ''):
  $img = $page->image($page->heroImg());

?>

<div class="hero u-margin-top-off" style="background-image: url('<?= $img->url() ?>');">
</div>

<?php endif ?>

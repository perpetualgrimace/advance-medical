<?php

// check for optional variables passed from template
if(isset($layout)): $layout = $layout; else: $layout = 'g-4'; endif;

?>

<aside class="sidebar g-col <?= $layout ?>">

  <?php snippet('sidebar-nav') ?>

</aside>

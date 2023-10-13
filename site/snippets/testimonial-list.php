 <?php

  // check for optional variables passed from template
  if(isset($layout)): $layout = $layout; else: $layout = ''; endif;

  // get all testimonials
  $items = $page->grandChildren()->visible()->shuffle();

  /*
  // if a query exists, get the search results...
  if(isset($query) && ($query != '')) {
    $items = $results;
  // ...otherwise, grab all testimonials
  } else {
    $items = $page->grandChildren()->visible()->shuffle();
  }
  */

?>

<div class="g-col <?= $layout ?>">

  <!-- display cards -->
  <div class="card-list testimonial-card-list<?php if (isset($query)) { echo ' u-margin-top';} ?>">
    <?php
    // get the first row
    foreach ($items as $item) {
      pattern('testimonial-card', array('item' => $item));
    }
    ?>
  </div>


</div>

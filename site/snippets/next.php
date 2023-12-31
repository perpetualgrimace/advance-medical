<?php

// the next page will be the previous article,
// unless there are no older articles, in which case it will be the latest article
if ($page->hasNextListed()) {
  $next = $page->nextListed();
} else {
  $next = $page->siblings()->listed()->first();
}
if ($page->hasPrevListed()) {
  $prev = $page->prevListed();
} else {
  $prev = $page->siblings()->listed()->last();
}

// set next image
if ($next->hero() != '') {
  $nextImg = $next->hero();
} else {
  $nextImg = NULL;
}

// card layout
$cardLayout = 'g-6';

?>

<section class="section nextprev">

  <div class="nextprev-prev g-col <?= $cardLayout ?> u-left-center">
    <p class="display">Previous post: </p>
    <?php snippet('card', ['item' => $prev]); ?>
  </div>

  <div class="nextprev-next g-col <?= $cardLayout ?> u-left-center">
    <p class="display">Next post: </p>
    <?php snippet('card', ['item' => $next]); ?>
  </div>

</section>

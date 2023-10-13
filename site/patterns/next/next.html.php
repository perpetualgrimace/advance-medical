<?

// the next page will be the previous article,
// unless there are no older articles, in which case it will be the latest article
if ($page->hasNextVisible()) {
  $next = $page->nextVisible();
} else {
  $next = $page->siblings()->visible()->first();
}
if ($page->hasPrevVisible()) {
  $prev = $page->prevVisible();
} else {
  $prev = $page->siblings()->visible()->last();
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
    <? pattern('card', ['item' => $prev]); ?>
  </div>

  <div class="nextprev-next g-col <?= $cardLayout ?> u-left-center">
    <p class="display">Next post: </p>
    <? pattern('card', ['item' => $next]); ?>
  </div>

</section>

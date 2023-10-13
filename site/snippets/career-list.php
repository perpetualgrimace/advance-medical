 <?

  // check for optional variables passed from template
  if(isset($layout)): $layout = $layout; else: $layout = ''; endif;
  if(isset($cardLayout)): $cardLayout = $cardLayout; else: $cardLayout = 'g-6'; endif;


  // number of items to show on each page (articles list page)
  if (isset($pagNum)) {
    $pagNum = $pagNum;
  } else {
    $pagNum = 12;
  }


  // if a query exists, get the search results...
  if(isset($query) && ($query != '')) {
    $items = $results;
  // ...otherwise, grab the most recent of each content type
  } else {
    $items = $page->children()->visible()->sortBy('date', 'desc');
  }

?>

<div class="g-col <?= $layout ?>">

    <!-- display cards -->
    <div class="g-columns card-list<? if (isset($query)) { echo ' u-margin-top';} ?>">
      <?
      // get the first row
      foreach ($items as $item) {
        pattern('career-card', array('item' => $item, 'cardLayout' => $cardLayout));
      }
      ?>
    </div>


    <!-- more link -->
    <? if($page->isHomePage() && ($visibleContent->count() > 3)): ?>
      <div class="g-columns u-left-right">
        <div class="g-col">
          <a href="blog" class="more-link button"><?= $pages->find('careers')->moreButton() ?></a>
        </div>
      </div>
    <? endif ?>


</div>

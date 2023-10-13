<?
  // check for optional variables passed from template
  if(isset($layout)): $layout = $layout; else: $layout = 'g-8'; endif;

  // number of items to show on each page (articles list page)
  $pag_num    = 4;
  $paginated  = $results->paginate($pag_num);
  $pagination = $paginated->pagination();
?>


  <div class="g-col u-margins-auto <?= $layout ?> <? if($results->count() == 0): ?> content u-left-center<? else: ?> u-left<? endif ?>">


      <!-- if results are found -->
      <? if($results->count() != 0): ?>

        <ol class="search">
          <? foreach($paginated as $result): ?>
          <li class="search-item">
            <h3 class="delta search-title">
              <a class="u-linked_heading search-link" href="<?= $result->url() ?>">
                <?= $result->title() ?>
              </a>
            </h3>
            <p class="search-excerpt milli"><? if ($result->description() != ''): echo $result->description(); else: echo excerpt($result->text()->kirbytext(), 500); endif ?></p>
            <a class="search-more_link milli" href="<?= $result->url() ?>"><?= $result->uri() ?></a>
          </li>
          <? endforeach ?>
        </ol>

        <? if ($pagination->items() > $pag_num): ?>
          <?= pattern('pagination', array('pagination' => $pagination)) ?>
        <? endif; ?>

    <?php else: ?>

      <?= $page->text()->kt() ?>

    <? endif ?>
  </div>

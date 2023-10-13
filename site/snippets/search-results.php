<?php
  // check for optional variables passed from template
  if(isset($layout)): $layout = $layout; else: $layout = 'g-8'; endif;

  // number of items to show on each page (articles list page)
  $pag_num    = 4;
  $paginated  = $results->paginate($pag_num);
  $pagination = $paginated->pagination();
?>


  <div class="g-col u-margins-auto <?= $layout ?> <?php if($results->count() == 0): ?> content u-left-center<?php else: ?> u-left<?php endif ?>">


      <!-- if results are found -->
      <?php if($results->count() != 0): ?>

        <ol class="search">
          <?php foreach($paginated as $result): ?>
          <li class="search-item">
            <h3 class="delta search-title">
              <a class="u-linked_heading search-link" href="<?= $result->url() ?>">
                <?= $result->title() ?>
              </a>
            </h3>
            <p class="search-excerpt milli"><?php if ($result->description() != ''): echo $result->description(); else: echo excerpt($result->text()->kirbytext(), 500); endif ?></p>
            <a class="search-more_link milli" href="<?= $result->url() ?>"><?= $result->uri() ?></a>
          </li>
          <?php endforeach ?>
        </ol>

        <?php if ($pagination->items() > $pag_num): ?>
          <?= pattern('pagination', array('pagination' => $pagination)) ?>
        <?php endif; ?>

    <?php else: ?>

      <?= $page->text()->kt() ?>

    <?php endif ?>
  </div>

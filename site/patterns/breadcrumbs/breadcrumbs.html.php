<? $breadcrumbs = $site->breadcrumb(); ?>

<nav class="breadcrumbs-container" role="navigation">
  <div class="g-container">
      <ul class="breadcrumbs-list g-col inline-list u-padding-top-off u-padding-bottom-off">


        <? foreach($breadcrumbs as $crumb): ?>
          <? if(!$crumb->isHomePage() && $crumb != $page): ?>

          <li class="breadcrumbs-item u-margin-top-off">
            <a class="nav-link breadcrumbs-link milli<? e(($crumb->slug() == $page->slug()), ' is-active-pg') ?>" href="<? e(($crumb->slug() == $page->slug()), '#main', $crumb->slug()) ?>">
              <?= $crumb->title() ?>
            </a>
          </li>

          <? endif ?>
        <? endforeach ?>

      </ul>
  </div>
</nav>

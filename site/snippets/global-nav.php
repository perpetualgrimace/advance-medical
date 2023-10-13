<div class="nav-container">
  <nav class="nav nav-main g-container u-padding-top-off" role="navigation">
    <div class="g-columns">
      <div class="g-col u-padding-top-off u-padding-bottom-off">

        <a class="skip u-screenreader" href="#main"><?= $site->skipLink() ?></a>

        <?php snippet('global-nav-logo') ?>
        <?php snippet('global-nav-toggle') ?>
        <?php snippet('global-nav-main') ?>
        <?php snippet('language-select-google') ?>
        <?php // pattern('language-select') ?>

        <div hidden id="current"><?= $site->currentPage() ?></div>

      </div>
    </div>
  </nav>
</div>

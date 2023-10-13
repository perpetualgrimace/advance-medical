<nav class="language-container" role="navigation">


  <?php snippet('svg-img', array('filename' => 'icons/globe', 'class' => 'language-globe-img')); ?>

  <a href="#languages" class="language-selected nav-link" data-toggle="language"><span class="u-screenreader"><?= $site->languageSelect() ?> </span>
    <span class="u-hide-below-xs"><?= $site->language()->name() ?></span>
    <span class="u-hide-above-xs" aria-hidden="true"><?= $site->language() ?></span>
    <?php snippet('svg-img', array('filename' => 'icons/dropdown', 'class' => 'language-dropdown-img')); ?>
  </a>

  <!-- adapted from https://getkirby.com/docs/languages/switching-languages -->
  <ul class="language-list" id="languages">
    <?php foreach($site->languages() as $language): ?>
    <?php if($site->language() != $language): ?>
      <li class="language-item nav-item">
        <a class="language-link nav-link"
        href="<?php e($page->content($language->code())->language() != $site->language($language->code()), page('error')->url($language->code()), $page->url($language->code()))?>"
        class="language-link" hreflang="<?= $language->code() ?>">
          <?= $language->name() ?>
        </a>
      </li>
    <?php endif ?>
    <?php endforeach ?>
  </ul>


</nav>

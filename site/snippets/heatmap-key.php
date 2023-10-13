<?php $ranges = ['0', '1-50', '51-100', '101-500', '501-plus'] ?>

<div class="g-col g-4 content u-center-left">

  <div class="heatmap-key">

    <p class="heatmap-headline display">Expert Medical Opinion has helped people in 194 countries around the world</p>

    <?php /*

    <ul class="u-margin-top heatmap-list u-margins-auto">

      <?php foreach ($ranges as $range): ?>
        <li class="heatmap-item heatmap-item-<?= $range ?> u-margin-top-off milli">
          <?= e($range == '501-plus', '501+', $range) ?>
          <?php /*
          <a href="#heatmap-<?= $range ?>" class="heatmap-link heatmap-link-<?= $range ?> u-underline-off milli u-padding"><?= e($range == '501-plus', '501+', $range) ?></a>
        */ /* ?>
        </li>
      <?php endforeach ?>

      */ ?>

    </ul>
  </div>
</div>

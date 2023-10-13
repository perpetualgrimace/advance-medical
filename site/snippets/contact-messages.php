<?php if($form->successful()): ?>
  <div class="is-successful u-center" data-confirmation="success">
    <?= kirbytext($page->success()) ?>
  </div>
<?php else: ?>
  <div class="is-fail u-center" data-confirmation="fail">
    <?= kirbytext($page->fail()) ?>
  </div>
<?php endif ?>

<?php if($form->successful()): ?>
  <div class="is-successful u-center" data-confirmation="success">
    <?= $page->success()->kirbytext() ?>
  </div>
<?php else: ?>
  <div class="is-fail u-center" data-confirmation="fail">
    <?= $page->fail()->kirbytext() ?>
  </div>
<?php endif ?>

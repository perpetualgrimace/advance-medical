<div class="process-item g-columns g-constant g-compact u-margin-top">
  <div class="process-image-container g-col g-2">
    <img class="process-image u-margins-auto" src="<?= $page->image($process->mainImg())->url() ?>" alt="" draggable="false"
    <?php if ($process->fallbackImg() != ''): ?>
      onerror="this.src='<?= $page->image($process->mainImg())->url() ?>;this.onerror=null;'"
    <?php endif ?>>
  </div>
  <div class="process-caption g-col g-10">
    <h3 class="process-title"><?= $process->title() ?></h3>
    <p class="process-text"><?= $process->caption() ?></p>
  </div>
</div>

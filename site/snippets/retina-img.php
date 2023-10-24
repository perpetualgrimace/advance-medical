<?php
// check for variables passed from template
if (isset($class)) { $class = $class; } else { $class = NULL; }
if (isset($filename)) { $filename = $filename; } else { $filename = NULL; }
if (isset($extension)) { $extension = $extension; } else { $extension = 'png'; }
if (isset($baseUrl)) { $baseUrl = $baseUrl; } else { $baseUrl = $page->url() . '/'; }

$image1x = $baseUrl . $filename . '.' .  $extension;
$image2x = $baseUrl . $filename . '@2x.' .  $extension;

?>

<img class="<?php e($class !== NULL, $class) ?>" src="<?= $image1x ?>" srcset="<?= $image1x ?> 1x, <?= $image2x ?> 2x" sizes="100vw" alt="" draggable="false">

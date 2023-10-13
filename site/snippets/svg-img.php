<?
// check for variables passed from template
if (isset($class)) { $class = $class; } else { $class = NULL; }
if (isset($filename)) { $filename = $filename; } else { $filename = NULL; }

// get path to assets
$svgImg = $site->url() . '/assets/img/' . $filename . '.svg';
$pngImg = $site->url() . '/assets/img/' . $filename . '.png';

?>


<img class="<?= $class ?>" src="<?= $svgImg ?>" alt="" onerror="this.src='<?= $pngImg ?>;this.onerror=null;'" draggable="false">

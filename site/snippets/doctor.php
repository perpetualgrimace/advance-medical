<?php

  // get doctor name
  if(isset($name)) {
    $name = $name;
  } else {
    $name = 'Name field empty';
  }

  // get caption
  if(isset($caption)) {
    $caption = $caption;
  } else {
    $caption = 'Doctor&rsquo;s vast and impressive credentials';
  }

?>

<figure class="doctor-item u-center u-margin-top-off">
  <div class="doctor-img-container u-margins-auto">
    <img data-src="<?= $img ?>" class="doctor-img" alt="" draggable="false">
  </div>
  <noscript>
    <img src="<?= $img ?>" class="doctor-img u-margins-auto" alt="" draggable="false">
  </noscript>

  <figcaption class="doctor-info">
    <h3 class="doctor-name milli"><?= $name ?></h3>
    <p class="doctor-caption u-line-height-tight"><?= $caption ?></p>
  </figcaption>
</figure>

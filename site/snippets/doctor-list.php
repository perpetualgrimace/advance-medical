<?php

// define physicians and experts
$physicians = $pages->find('testimonials/physician')->children()->filterBy('img', '!=', '')->shuffle();
$experts = $pages->find('testimonials/expert')->children()->filterBy('img', '!=', '')->shuffle();

// if a category is supplied and it is experts, get experts
if (isset($category) && $category == 'experts') {
  $doctors = $experts;
// in all other cases, get physicians
} else {
  $doctors = $physicians;
}

?>


<aside class="doctor-list u-padding-top-sm u-margin-top-sm u-margin-bottom">

  <?php foreach ($doctors as $doctor) {

    // get doctor name
    $name = $doctor->testimonee();

    // get doctor credentials
    if ($doctor->credentials() != '') {
      $caption = $doctor->credentials()->excerpt(28, 'words');
    } else {
      $caption = $doctor->parent()->testimonee() . ', Advance Medical';
    }

    // get doctor image
    $img = $doctor->image($doctor->img())->url();

    pattern('doctor', [
      'name' => $name,
      'caption' => $caption,
      'img' => $img
    ]);
  } ?>

</aside>

<?php
kirbytext::$tags['testimonial'] = array(
  'attr' => array(
    'marginTop',
    'marginBottom'
  ),
  'html' => function($tag) {
    $marginTop = $tag->attr('marginTop', 'lg');
    $marginBottom = $tag->attr('marginBottom', 'xl');

    return '<aside class="u-margin-top-' . $marginTop . ' u-margin-bottom-' . $marginBottom . '">' .
      snippet('testimonial', array('source' => $tag->attr('testimonial')), true) .
    '</aside>';
  }
);

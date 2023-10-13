<?php
kirbytext::$tags['retina-img'] = array(
  'attr' => array(
    'class'
  ),
  'html' => function($tag) {
    return snippet('retina-img', [
      'filename' => $tag->attr('retina-img'),
      'class' => $tag->attr('class')
    ], true);
  }
);

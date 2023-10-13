<?php
kirbytext::$tags['svg-img'] = array(
  'attr' => array(
    'class',
    'path'
  ),
  'html' => function($tag) {
    return snippet('svg-img', [
      'filename' => $tag->attr('svg-img'),
      'class' => $tag->attr('class'),
      'path' => $tag->attr('path', 'yep')
    ], true);
  }
);

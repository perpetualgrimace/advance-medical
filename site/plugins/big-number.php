<?php
kirbytext::$tags['big-number'] = array(
  'attr' => array(
    'label'
  ),
  'html' => function($tag) {
    return snippet('big-number', [
      'number' => $tag->attr('big-number'),
      'label' => $tag->attr('label')
    ], true);
  }
);

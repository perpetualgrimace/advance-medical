<?php
kirbytext::$tags['big-number'] = array(
  'attr' => array(
    'label'
  ),
  'html' => function($tag) {
    return pattern('big-number', [
      'number' => $tag->attr('big-number'),
      'label' => $tag->attr('label')
    ], true);
  }
);

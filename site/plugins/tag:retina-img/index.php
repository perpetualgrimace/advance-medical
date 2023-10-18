<?php

Kirby::plugin('perpetualgrimace/retina-img', [
  'tags' => [
    'retina-img' => [
      'attr' => ['class'],
      'html' => function($tag) {
        return snippet('retina-img', [
          'filename' => $tag->attr('retina-img'),
          'class' => $tag->attr('class')
        ], true);
      }
    ]
  ]
]);
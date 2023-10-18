<?php

Kirby::plugin('perpetualgrimace/big-number', [
  'tags' => [
    'big-number' => [
      'attr' => ['label'],
      'html' => function($tag) {
        return snippet('big-number', [
          'number' => $tag->attr('big-number'),
          'label' => $tag->attr('label')
        ], true);
      }
    ]
  ]
]);
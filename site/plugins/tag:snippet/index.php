<?php

Kirby::plugin('perpetualgrimace/snippet', [
  'tags' => [
    'snippet' => [
      'attr' => [],
      'html' => function($tag) {
        $file =  $tag->attr('snippet');
        return snippet($file, array(), true);
      }
    ]
  ]
]);

<?php

Kirby::plugin('perpetualgrimace/testimonial', [
  'tags' => [
    'testimonial' => [
      'attr' => [
        'marginTop',
        'marginBottom'
      ],
      'html' => function($tag) {
        $marginTop = $tag->attr('marginTop', 'lg');
        $marginBottom = $tag->attr('marginBottom', 'xl');

        return '<aside class="u-margin-top-' . $marginTop . ' u-margin-bottom-' . $marginBottom . '">' .
          snippet('testimonial', array('source' => $tag->attr('testimonial')), true) .
        '</aside>';
      }
    ]
  ]
]);
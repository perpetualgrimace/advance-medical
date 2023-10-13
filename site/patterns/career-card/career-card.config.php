<?php

return [
  'defaults' => [
    'item' => function() {
      return site()->pages()->find('careers')->children()->listed()->shuffle()->first();
    },
    'cardLayout' => 'g-6'
  ]
];

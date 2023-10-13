<?php

return [
  'defaults' => [
    'item' => function() {
      return site()->pages()->find('blog')->children()->listed()->shuffle()->first();
    },
    'cardLayout' => ''
  ]
];

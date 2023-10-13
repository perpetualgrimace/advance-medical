<?php

return [
  'defaults' => [
    'next' => function() {
      return site()->pages()->find('blog')->children()->listed()->shuffle()->first();
    }
  ]
];

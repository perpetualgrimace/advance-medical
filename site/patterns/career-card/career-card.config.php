<?

return [
  'defaults' => [
    'item' => function() {
      return site()->pages()->find('careers')->children()->visible()->shuffle()->first();
    },
    'cardLayout' => 'g-6'
  ]
];

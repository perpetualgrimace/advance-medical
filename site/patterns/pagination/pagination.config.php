<?php

return [
  'defaults' => [
    'pagination' => function() {
      return site()->homePage()->children()->listed()->flip()->paginate(10)->pagination();
    }
  ]
];

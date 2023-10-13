<?php

return [
  'defaults' => [
    'name' => 'Leonardo Riella',
    'caption' => 'Doctor’s vast and impressive credentials',
    'img' => function() {
      return site()->pages()->find('expertise/doctors')->url() . '/lriella.jpg';
    }
    /*'doctors' => function() {
      return yaml(site()->pages()->find('doctors')->doctorsPCM());
    } */
  ]
];

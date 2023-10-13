<?php
kirbytext::$tags['doctor-list'] = array(
  'html' => function($tag) {
    return snippet('doctor-list', [
      'category' => $tag->attr('doctor-list')
    ], true);
  }
);

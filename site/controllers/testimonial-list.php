<?php

return function($site, $pages, $page) {

  $query = get('q');

  if($query != '') {

    $results = page('testimonials')->search($query, 'title|text|testimonee|category');
    $results = $results->listed()->flip();

    return array(
      'query'      => $query,
      'results'    => $results
    );
  };
};

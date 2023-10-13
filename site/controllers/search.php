<?php

return function($site, $pages, $page) {

  $query   = get('q');
  $results = $site->index()->listed()->search($query, 'title|text|description|hashtag|author');
  $results = $results->sortBy('depth');

  return array(
    'query'      => $query,
    'results'    => $results
  );

};

<?php

// license
c::set('license', 'K2-PRO-b1832ccc9f5adac41996b0df3e03ef51');

// debugging
c::set('debug', true);

// cache
c::set('cache', true);
c::set('cache.ignore', array(
  'contact',
  'search',
  'sitemap',
  'feed',
  'testimonials'
));

// .md extension support
c::set('content.file.extension', 'md');

// smart quotes
c::set('smartypants', true);

// thumbnails
c::set('thumbs.driver', 'im');

// auto-detect language
// c::set('language.detect', true);

// languages
c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_US',
    'default' => true,
    'url'     => '/'
  )
));

// patterns config
c::set('patterns.preview.css', 'assets/build/css/main.min.css');
c::set('patterns.preview.js', 'assets/build/js/main.min.js');
c::set('patterns.preview.background', '#002A54');

// routing
c::set('routes', array(

  // rss » feed
  array(
    'pattern' => 'rss',
    'action'  => function() {
      go('feed');
    }
  ),

  // admin » panel
  array(
    'pattern' => 'admin',
    'action'  => function() {
      go('panel');
    }
  ),

  // components » patterns
  array(
    'pattern' => 'components',
    'action'  => function() {
      go('patterns');
    }
  ),

  // testimonials » home
  array(
    'pattern' => 'testimonials/(:any)',
    'action'  => function() {
      go('testimonials');
    }
  )
));

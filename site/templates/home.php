<?php

// define content types
$articles = $pages->find('blog')->children()->listed()->filterBy('template', 'blog-article');

// template
snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');


  // page title
  snippet('global-main-open');
    snippet('home-header');
    pattern('scroll-indicator');

    // intro block
    snippet('global-section-open', ['id' => 'intro']);
      snippet('global-textblock', ['layout' => 'g-10 u-margins-auto u-left-center']);
    snippet('global-section-close');

    // testimonial
    pattern('testimonial', ['source' => $page->testimonial1()]);

    // enterprise block
    snippet('global-section-open');
      snippet('global-textblock', ['field' => 'enterprise', 'layout' => 'g-10 u-margins-auto u-left-center']);
    snippet('global-section-close');

    // testimonial
    pattern('testimonial', ['source' => $page->testimonial2()]);

    // blog content
    snippet('global-section-open', ['class' => 'u-padding-bottom-sm']);
      snippet('blog-list', ['pagNum' => 6, 'layout' => '']);
    snippet('global-section-close');

    // cta
    snippet('global-cta');

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');

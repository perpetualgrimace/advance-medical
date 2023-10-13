<?php

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // page title
  snippet('global-main-open');
    snippet('blog-header');

    // main content
    snippet('global-section-open');
      snippet('blog-article-content');
      snippet('blog-sidebar');
    snippet('global-section-close');

    // cta
    snippet('blog-cta');
    pattern('next');

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');

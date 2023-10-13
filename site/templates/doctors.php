<?php

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // page title
  snippet('global-main-open');
    snippet('global-header');

    // main content
    snippet('global-section-open');
      snippet('global-textblock', ['layout' => 'g-10 u-margins-auto']);
      // snippet('doctor-sidebar', ['layout' => 'g-5']);
    snippet('global-section-close');

    // cta
    snippet('global-cta');

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');

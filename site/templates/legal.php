<?php

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // page title
  snippet('global-main-open');
    snippet('global-header');

    // main content
    snippet('global-section-open');
      snippet('global-textblock', ['layout' => 'g-9 delta u-margins-auto']);
    snippet('global-section-close');

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');

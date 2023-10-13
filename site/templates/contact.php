<?php

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // page title
  snippet('global-main-open');
    snippet('global-header');

    // contact info
    snippet('global-section-open');
      snippet('global-textblock', ['layout' => 'g-12']);
      snippet('contact-info');
    snippet('global-section-close');

    // map
    snippet('global-section-open');
      snippet('contact-locations');
      snippet('contact-map');
    snippet('global-section-close');

    // cta
    // snippet('contact-cta');

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');

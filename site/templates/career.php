<?php

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // page title
  snippet('global-main-open');
    snippet('career-header');

    // main content
    snippet('global-section-open');
      snippet('career-textblock');
      snippet('career-sidebar');
    snippet('global-section-close');

    // cta
    snippet('career-cta');

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');

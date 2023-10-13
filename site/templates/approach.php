<?

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // page title
  snippet('global-main-open');
    snippet('global-header');

    // main content
    snippet('global-section-open', [
      'class' => 'u-padding-bottom-off'
    ]);
      snippet('global-textblock', [
        'layout' => 'g-10 u-margins-auto u-padding-bottom-off'
      ]);
    snippet('global-section-close');

    // cta
    snippet('global-cta', [
      'class' => 'no-border'
    ]);

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');

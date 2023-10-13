<?

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // page title
  snippet('global-main-open');
    snippet('global-header');

    // map
    snippet('global-section-open');
      snippet('heatmap-key');
      snippet('heatmap-map');
    snippet('global-section-close');

    // patient focus
    if ($page->text() != '') {
      snippet('global-section-open');
        snippet('global-textblock', ['image' => 'phone']);
      snippet('global-section-close');
    }

    // forgotten
    if ($page->forgotten() != '') {
      snippet('global-section-open');
        snippet('global-textblock', [
          'field' => 'forgotten',
          'caption' => 'forgottenCaption',
          'image' => 'shoulder'
        ]);
      snippet('global-section-close');
    }

    // access
    if ($page->access() != '') {
      snippet('global-section-open');
        snippet('global-textblock', [
          'field' => 'access',
          'caption' => 'accessCaption',
          'image' => 'holding-hands',
          'extension' => 'jpg'
        ]);
      snippet('global-section-close');
    }

    // global
    if ($page->who() != '') {
      snippet('global-section-open');
        snippet('global-textblock', [
          'field' => 'who',
          'caption' => 'whoCaption',
          'layout' => 'g-9 u-margins-auto'
        ]);
      snippet('global-section-close');
    }

    // cta
    snippet('global-cta');

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');

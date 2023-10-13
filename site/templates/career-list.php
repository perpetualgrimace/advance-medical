<?

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // page title
  snippet('global-main-open');
    snippet('global-header');

    // show nav above results by default
    if (!isset($query)) {
      snippet('global-section-open', ['class' => 'u-padding-top-sm u-padding-bottom']);
        snippet('career-list-nav');
      snippet('global-section-close');
    }

    // main content
    snippet('global-section-open', ['class' => 'no-border u-margin-top-off u-padding-top-off']);
      snippet('career-list', ['layout' => 'u-padding-top-off']);
    snippet('global-section-close');

    // show nav below results if a query has been entered
    if (isset($query)) {
      snippet('global-section-open', ['class' => 'u-padding-top-off u-margin-top-off u-padding-bottom no-border']);
        snippet('career-list-nav');
      snippet('global-section-close');
    }

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');

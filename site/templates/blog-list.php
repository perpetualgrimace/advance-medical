<?

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // page title
  snippet('global-main-open');
    snippet('global-header');

    // show nav above results by default
    snippet('global-section-open', ['class' => 'u-padding-top-sm u-padding-bottom']);
      snippet('blog-list-nav');
    snippet('global-section-close');

    // main content
    snippet('global-section-open', ['class' => 'no-border u-margin-top-off u-padding-top-off']);
      snippet('blog-list', ['layout' => 'u-padding-top-off']);
    snippet('global-section-close');

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');

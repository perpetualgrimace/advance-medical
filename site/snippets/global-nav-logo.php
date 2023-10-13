<a class="nav-logo<?php e( $page->isHomePage(), ' is-active-pg' ) ?>" href="<?php e( $page->isHomePage(), '#main', $site->url() ) ?>">
  <img class="nav-logo-img" src="<?= $site->url() ?>/assets/img/logo.svg" alt="" onerror="this.src='<?= $site->url() ?>/assets/img/logo.png;this.onerror=null;'" draggable="false">
  <span class="u-screenreader"><?= $site->title() ?></span>
</a>

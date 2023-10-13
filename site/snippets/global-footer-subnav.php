<?

// subnav items
$items = $site->children()->filterBy('template', 'legal');

?>

<ul class="footer-subnav-list">
  <? foreach($items as $item): ?>

    <li class="footer-subnav-item">
      <a class="footer-link footer-subnav-link nav-link" <? e( ($item->slug() == $page->slug()), 'aria-describedby="current"' ) ?> href="<? e( $item->isOpen() && ( $page->slug() == $item->slug() ), '#main', $item->url() ) ?>">
      <?= $item->title() ?>
      </a>
    </li>

    <? endforeach ?>

    <? /* <li class="footer-subnav-item">
      <a class="footer-link footer-subnav-link nav-link" href="#languages" data-toggle="language">
        <? snippet('svg-img', array('filename' => 'icons/globe', 'class' => 'footer-subnav-globe')); ?>
        <?= $site->language()->name() ?>
      </a>
    </li> */ ?>


</ul>
